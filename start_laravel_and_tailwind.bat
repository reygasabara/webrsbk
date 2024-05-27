@echo off
cd /d C:\xampp\htdocs\webrsbk
start "" "cmd /k php artisan serve"
start "" "cmd /k npm run dev"
