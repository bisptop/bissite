echo "Making production and minifying with yuicompressor-2.4.7"
echo "Please make sure the files are Git..  file modification will not be able to recovered .. GIT is IMPORTANT"

echo "js file minifying .."
cd js
./production.sh
cd ..
echo "jquery.js minified"

echo "CSS processing"
cd css
./production.sh
cd ..
echo "css minified"

echo "Minifying done .."
