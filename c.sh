#!/data/data/com.termux/files/usr/bin/zsh

cp apoyos2.db ./descarga/c.db
cd ./descarga
cp .sqliterc $HOME/.sqliterc 
echo "select *from beneficiados"|sqlite3 c.db
cd $HOME 
rm .sqliterc 
