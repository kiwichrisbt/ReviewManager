<h3>What Does This Do?</h3>
<p>This module provides a complete mechanism for users to be able to provide feedback to individual pages, or infact to individual news articles, products, or other items on your website.  It includes the ability for visitors to make commments, and to optionally provide a rating on the particular item.</p>

<div class="warning">
<p><strong>USE AT YOUR OWN RISK!</strong></p>
<p>Note: This module tracks users IP addresses and email addresses.  It does not anonymize them, and there is no mechanism to anonymize them after a period of time.  This IS not compatible with Do-not-track mechanisms, and may be incompatible with some laws.</p>
</div>

<h3>Features</h3>
<ul>
<li>Moderation - Optionally, all comments can be marked as &quot;draft&quot; for review by an administrator before allowing the comment to be displayed on the website.</li>
<li>Spam Checking - Optionally, all comments can be ran through stopforumspam to detect attacks.</li>
<li>Captcha support - Optionally, visitors can be required to validate that they are human by entering the value displayed in a randomly generated captcha image.</li>
<li>Admin Notification - Administrators can be notified by email of new comments.</li>
<li>User Notification - Visitors can choose to be notified by email of additional comments on threads that they are interested in.</li>
<li>Custom Fields - Administrators can define custom fields (with a variety of types, and attributes), to allow the visitor to enter additional information with their comment.</li>
<li>Template Control - All output is controlled via smarty templates.  Multiple different versions of each display template are allowed.</li>
<li>A ratings system.</li>
<li><strong>Much More...</strong></li>
</ul>


<h3>Permissions</h3>
<ul>
    <li>Manage Reviews - can select which Admin user groups can view and edit reviews</li>
    <li>All Settings & Options - available to Admin Users with 'Modify Site Preferences' access</li>
</ul>


<h3>How do I use it</h3>
<h4>Calling CGFeedback from a page</h4>
<p>The simplest way to utilize this module, is to include the following tag in the bottom of your page content: <code>{CGFeedback}</code>.  This will create a comment form to allow visitors to enter comments and ratings about that particular page.   To display those comments, you would add a tag like: {CGFeedback action='summary'} below the tag specified above.  Tags can optionally be placed in page templates, or in module templates.</p>
<h4>Calling CGFeedback from news, or other modules</h4>
<p>CGFeedback can be utilized within the news module to allow site visitors to enter comments on particular items in News or any module.  To do this, you would enter a tag such as: <code>{CGFeedback key1=&quot;News&quot; key2=\$entry->id}</code> into the appropriate news detail template.   Similarly to display those comments, you would use a tag such as <code>{CGFeedback key1=&quot;News&quot; key2=\$entry->id action='summary'}</code></p>
<p>Similar techniques can be used to allow CGFeedback to interact with almost any other module in limitless ways.</p>
<p>Additional parameters can be used to further customize the behaviour and output of the module.  You are encouraged to explore the parameters as described below, and try them.</p>

<h3>Additional Modules</h3>
<p>For captcha support to be enabled, you must have the lastest version of the Captcha module.</p>

<h3>Support</h3>
<p>This module does not include commercial support. However, there are a number of resources available to help you with it:</p>
<ul>
<li>For the latest version of this module, FAQs, or to file a Bug Report or buy commercial support, please visit calguy\'s
module homepage at <a href="http://techcom.dyndns.org">techcom.dyndns.org</a>.</li>
<li>Additional discussion of this module may also be found in the <a href="http://forum.cmsmadesimple.org">CMS Made Simple Forums</a>.</li>
<li>The author, calguy1000, can often be found in the <a href="irc://irc.freenode.net/#cms">CMS IRC Channel</a>.</li>
<li>Lastly, you may have some success emailing the author directly.</li>
</ul>

<h3>Copyright and License</h3>
<p>Copyright &copy; 2008, Robert Campbell <a href="mailto:calguy1000@cmsmadesimple.org">&lt;calguy1000@cmsmadesimple.org&gt;</a>. All Rights Are Reserved.</p>
<p>This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.</p>
<p>However, as a special exception to the GPL, this software is distributed
as an addon module to CMS Made Simple.  You may not use this software
in any Non GPL version of CMS Made simple, or in any version of CMS
Made simple that does not indicate clearly and obviously in its admin
section that the site was built with CMS Made simple.</p>
<p>This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
Or read it <a href="http://www.gnu.org/licenses/licenses.html#GPL">online</a></p>
