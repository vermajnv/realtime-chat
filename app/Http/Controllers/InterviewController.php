<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use Response;
use GuzzleHttp\Client;

class InterviewController extends Controller
{
    public function list()
    {
        return view('interview.dualpage');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('template')) {
            Self::uploadTemplateFile($request->file('template'));
        }
        
        $questionCount = $request->_questionCount;
        $xml = '';
        $answerField = '';
        $condition = '';
        for ($questionCount; $questionCount > 0 ; $questionCount--) { 
            $condition = (isset($request->{'quastion' . $questionCount . '_mendatory'})) ? 'mandatory: True' : '';
            $question = $request->{'question' . $questionCount};
            $varibaleName = $request->{'question' . $questionCount . '_var'};
            $fieldName = $request->{'question' . $questionCount . '_field'};
            $answerField .= "\${" . $request->{'question' . $questionCount . '_var'} . "} "; 
            $xml .= <<<XML
            question: |
             {$question} ?
            fields: 
             - {$fieldName}: {$varibaleName}
            ---
            \n
            XML;
        }
        $xml .= <<<ANSWER
        question: |
         Here is your document.
        attachment:
         name: Your letter
         filename: letter
         docx template file: {$request->file('template')->getClientOriginalName()}
         valid formats:
            - pdf
            - docx
        {$condition}
        ---
        ANSWER;

        Storage::disk('uploads')->put('interviews/new.yml', $xml);
        // Self::uploadFileToDocassemble();
        Self::uploadFileToDocassembleCurl();
        return Response::json(['status' => 1, 'message' => 'success']);
    }

    private static function uploadFileToDocassemble()
    {
        $client = new Client(['headers' => ['X-API-Key' => 'rypVUUEsaDn4lniaGNRG29NZRISBItym']]);
        $res = $client->request('POST', 'http://3.230.143.72:8081/api/playground', [
            'multipart' => [
                [
                    'contents' => fopen(asset('uploads/interviews/new.yml'), 'r'),
                    'name' => 'file',
                    'filename' => 'new.yml'
                ],
                [
                    'name' => 'folder',
                    'contents' => 'questions'
                ] 
            ]
            // 'form_params' => [
            //     [
            //         'file' => fopen(asset('uploads/interviews/new.yml'), 'r'),
            //         'folder' => 'questions'
            //     ]
            // ]
        ]);

        if ($res->hasResponse()) {
            echo $res->getResponse()->getStatusCode();
        } else {
            var_dump($res->getHandlerErrorData());
        }
        // http://3.230.143.72:8081/api/playground
        // $response = Http::withHeaders([
        //     'X-API-Key' => 'rypVUUEsaDn4lniaGNRG29NZRISBItym',
        // ])->post('http://3.230.143.72:8081/api/playground', [
        //     'form' => [
        //         'file' => asset('storage/interviews/new.yml'),
        //         'folder' => 'questions'
        //     ],
        // ])->throw()->json();

    }

    private function uploadFileToDocassembleCurl()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://3.230.143.72:8081/api/playground",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => array('file'=> new \CURLFILE('/var/www/html/privatechat.example.com/public/uploads/interviews/new.yml', '', 'api_test.yml'),'folder' => 'questions'),
            CURLOPT_HTTPHEADER => array(
                "X-API-Key: rypVUUEsaDn4lniaGNRG29NZRISBItym"
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }

    private static function uploadTemplateFile($file)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://3.230.143.72:8081/api/playground",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => array('file'=> new \CURLFILE($file->getPathName(), '', $file->getClientOriginalName()), 'folder' => 'templates'),
            CURLOPT_HTTPHEADER => array(
                "X-API-Key: rypVUUEsaDn4lniaGNRG29NZRISBItym"
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }

}