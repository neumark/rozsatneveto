#!/bin/bash

wget http://wordpress.org/wordpress-3.7.1.zip
unzip wordpress-3.7.1.zip

pushd wordpress/wp-content/themes
ln -s ../../../rntheme/ rntheme
popd
