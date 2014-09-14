<?php
$pageTitle = 'Explanation of CSRF';
$examplePage = true;
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';

?>
<div class="row">
    <div class="large-6 columns">
        <p>Are you sure you want to delete this image?</p>
        <div class="row">
            <div class="large-6 columns">
                <img src="sti.jpg">
            </div>
            <div class="large-6 columns">
                <ul class="no-bullet">
                    <li><strong>My Car</strong></li>
                    <li><em>my_car.jpg</em></li>
                    <li>in album: <strong>stuff</strong></li>
                    <li>added: 5/25/2013 4:45p</li>
                </ul>
            </div>
        </div>
        <hr>
        <form action="http://picturesite.com/user/delete_photo.php" method="post">
            <input type="hidden" name="pictureid" value="12434">
            <button type="submit">Delete file</button> <a href="#">go back</a>
        </form>
    </div>
    <div class="large-5 large-offset-1 columns">
        <p>An inspection of the code reveals the following:</p>
        <pre>
&lt;form action="http://picturesite.com/user/delete_photo.php" method="post">
    &lt;input type="hidden" name="pictureid" value="12434">
    &lt;button type="submit">Delete file</button> &lt;a href="#">go back</a>
&lt;/form>
</pre>
        <p>Note the URL and the hidden input name/value.</p>
    </div>
</div>

<div class="row">
    <div class="large-12 columns">
        <hr>
        <h3 class="sectionheader subheader">Valuable Information</h3>
        <p>
            The valuable information here is the URL <kbd>http://picturesite.com/user/delete_photo.php</kbd>, the method
            of <kbd>POST</kbd> and the hidden input name of <kbd>pictureid</kbd> and the value of <kbd>12434</kbd>.
        </p>
        <p>
            The attacker then makes a website that entices the victim to submit the form to delete the image.
        </p>
    </div>
</div>

<div class="row">
    <div class="large-12 columns">
        <h3 class="sectionheader subheader">The Attacker's Website</h3>
    </div>
</div>
<div class="row">
    <div class="large-10 large-offset-1 columns" id="stilove">
        <div class="row">
            <div class="large-10 columns">
                <h3>My New Car!</h3>
            </div>
            <div class="large-2 columns">
                <img src="subaru.jpg">
            </div>
        </div>
        <div class="row">
            <div class="large-12 columns">
                <img src="sti_attacker.jpeg">
            </div>
        </div>
        <div class="row">
            <div class="large-9 columns">
                <p>Hello fellow Suby lovers!  See my new ride?  Pretty sweet huh?!</p>
            </div>
            <div class="large-3 columns">
                <form action="http://picturesite.com/user/delete_photo.php" method="post">
                    <input type="hidden" name="pictureid" value="12434">
                    <button type="submit"><i class="fi-like"></i> <span>24,122 likes</span></button>
                </form>

            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="large-12 columns">
        <hr>
        <h3 class="sectionheader subheader">What is Happening</h3>
        <p>
            The like link/button is a form that is identical to the source code above.  When the visitor clicks like,
            it will submit the form to delete their own image.
        </p>
        <p>
            On http://attacker.com, here is what the like button actually contains:
        </p>
<pre>
&lt;form action="http://picturesite.com/user/delete_photo.php" method="post">
    &lt;input type="hidden" name="pictureid" value="12434">
    &lt;button type="submit">&lt;i class="fi-like">&lt;/i> &lt;span>24,122 likes&lt;/span>&lt;/button>
&lt;/form>
</pre>
    </div>
</div>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
