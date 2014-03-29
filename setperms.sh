#!/bin/sh
sudo chmod -R +a '_www allow read,write,delete,add_file,add_subdirectory,file_inherit,directory_inherit' app/logs 
sudo chmod -R +a '_www allow read,write,delete,add_file,add_subdirectory,file_inherit,directory_inherit' app/cache
