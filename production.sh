echo "Making production and minifying with yuicompressor-2.4.7"
echo "Please make sure the files are Git..  file modification will not be able to recovered .. GIT is IMPORTANT"

echo "jquery.js minifying .."
java -jar yuicompressor-2.4.7.jar jquery.js -o jquery.js.min
mv jquery.js.min jquery.js
echo "jquery.js minified"

echo "jquery.easing.1.3.js minifying .."
java -jar yuicompressor-2.4.7.jar jquery.easing.1.3.js -o jquery.easing.1.3.js.min
mv jquery.easing.1.3.js.min jquery.easing.1.3.js
echo "jquery.easing.1.3.js minified"

echo "jquery.lavalamp-1.3.5.js minifying .."
java -jar yuicompressor-2.4.7.jar jquery.lavalamp-1.3.5.js -o jquery.lavalamp-1.3.5.js.min
mv jquery.lavalamp-1.3.5.js.min jquery.lavalamp-1.3.5.js
echo "jquery.lavalamp-1.3.5.js minified"

echo "CSS processing"
cd style
./production.sh
cd ..
echo "Minifying done .."
