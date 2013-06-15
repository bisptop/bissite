echo "Making production and minifying with yuicompressor-2.4.7"
echo "Please make sure the files are Git..  file modification will not be able to recovered .. GIT is IMPORTANT"

echo "JS processing"
cd js
./production.sh
cd ..
echo "JS Minifying done .."

cd css
./production.sh
cd ..
echo "CSS Minifying done .."

zip -r  bisptop.zip *
echo "Created bisptop.zip"
