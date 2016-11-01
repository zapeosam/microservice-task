Vagrant.configure("2") do |config|
  config.vm.hostname = "UrlToPdf"
  config.vm.box = "ubuntu/trusty64"
  config.vm.define "UrlToPdf"
  config.vm.synced_folder "./", "/vagrant", :mount_options => ["dmode=777","fmode=777"]
  config.vm.provider "virtualbox" do |v|
    v.name = "UrlToPdf"
  end

  config.vm.box_check_update = false
  config.vm.network :forwarded_port, guest: 80, host: 8080
  config.vm.provision :shell, path: "vagrant/vagrant.sh"
end
