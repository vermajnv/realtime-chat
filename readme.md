Installation manual

1. clone project
2. run command "composer install"
3. Next comand "npm install"
4. configure .env according to env.example
5. to apply all migration run "php artisan migrate"
6. Add city & state data use command "php artisan import:state-city"
7. add basic auth scaffolding run command "php artisan ui vue --auth"
8. Start redis service like in deb or arch "sudo systemctl start redis"
9. now initialize laravel-echo-serve with command "laravel-echo-server init" ask for information do it like your local setup
10. now start laravel-echo-server by "laravel-echo-server start"
11. To manage queue start "php artisan queue:work"
12. now open browser base path "like localhost/realtime-chat/public/chat" or if you made a vertual host enter "yourvitualhost.com/chat"
13. Do same thing in private window and have fun with realtime chat
