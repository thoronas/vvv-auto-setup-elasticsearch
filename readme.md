#VVV Auto Site Setup for Big DBs

This version of the auto site setup script is intended to help create a setup with a new install of WordPress. Take this folder and turn it into a git project. Add any themes or plugins you are working on to the themes and plugins folders as git submodules. Modify all of the config files to match your project and update the vvv-nginx.conf file with your dev domain.

If there are any special project instructions, I'd suggest replacing the contents of this file with those. This could include any site instructions that they should carry out when first visiting the site, etc.

Once you have everything set up, other team members can pull it into their copy of VVV and with a `vagrant provision` they will have a setup that mirrors your own.