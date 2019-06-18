#!/bin/bash


clear
pkg install update
pkg install upgrade
apt update
apt upgrade -y
pkg install php -y
pkg install sl
sl

echo
echo -e "\e[1n Subscribe to Termux Tricks & Tut"
echo
echo -e "\e[1m\e[32m Enter :\e[33m php ap.php"
echo
