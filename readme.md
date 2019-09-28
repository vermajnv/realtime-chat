Installation manual

1. clone project
2. run command "composer install"
3. Next comand "npm install"
4. configure .env according to env.example
5. to apply all migration run "php artisan migrate"
6. add basic auth scaffolding run command "php artisan ui vue --auth"
7. Start redis service like in deb or arch "sudo systemctl start redis"
8. now initialize laravel-echo-serve with command "laravel-echo-server init" ask for information do it like your local setup
9. now start laravel-echo-server by "laravel-echo-server start"
10. To manage queue start "php artisan queue:work"
11. now open browser base path "like localhost/realtime-chat/public/chat" or if you made a vertual host enter "yourvitualhost.com/chat"
12. Do same thing in private window and have fun wiht realtime chat
