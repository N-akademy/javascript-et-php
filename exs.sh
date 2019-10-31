Vagrant.configure("3")do|config|

config.vm.synced_folder"./echo>>soline.txt","var/www/html"
end
