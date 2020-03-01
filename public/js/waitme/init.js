function initWaitMe(ele){
    console.log($(ele));
    $(ele).waitMe({
        effect: 'bounce',
        text: '',
        bg: 'rgba(255, 255, 255, 0.7)',
        color: '#000',
        maxSize : '',
        waitTime : -1,
        textPos : 'vertical',
        fontSize : '',
        source : '',
        onClose : function() {}
    });
}
