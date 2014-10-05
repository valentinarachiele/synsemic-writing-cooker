synsemic-writing-cooker
=======================

<em>Synsemic writing cooker</em> is a project based on PHP, gracefully served using HTML5 and <a href="https://github.com/yahoo/pure/">Pure CSS</a>.

The aim of <em>Synsemic writing cooker</em> is to generate random exercises about synsemic writing. Basically, the system creates a list of different variables randomly generated – so each exercise is unique. 

To create your own exercises, create a TXT file for each variable. The TXT file must have a variable on each line. For example, your file <strong>color.txt</strong> will be structured like so:

<code>
yellow
red
blue
...
</code>

Then clone one of the PHP files (modifying its name, just to be sure there's a correspondance between TXT and PHP files) and change the line 3. For example, if your TXT file is named <strong>color.txt</strong>, your PHP file <strong>color.php</strong> will have the following code on line #3:

<code>$settings['text_from_file'] = 'color.txt';</code>

Be sure to check the <strong>index.php</strong> file too, because it controls the overall functioning.
