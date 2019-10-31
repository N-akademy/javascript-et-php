 -*- mode: ruby -*-
# vi: set ft=ruby :
Vagrant.configure("3")do|config|
# Demander le nom du dossier synchronisée
echo "Choisir le nom du dossier synchronisée avec la virtualbox"
read repertories
if [!empty($repertories)]
then
	mkdir "$repertories"
else 
	echo "Choisir le nom du dossier synchronisée avec la virtualbox"
fi

# Demander à modifier l'adresse IP
echo "Modifier la dernière séquence l'adresse IP de votre virtualbox avec deux à trois chiffres entre 11 et 255.exemple:http://192.168.33.250"
read IP
if [!empty($IP)]
then
	echo "Merci d'avoir bien remplie les deux conditions"
else
	echo"Modifier la dernière séquence l'adresse IP de votre virtualbox avec deux à trois chiffres entre 11 et 255.exemple:http://192.168.33.250"
fi

config.vm.box="ubuntu/xenial64"
config.vm.network"private_network", ip: "$IP"
config.vm.synced_folder"$repertories","var/www/html"

end
