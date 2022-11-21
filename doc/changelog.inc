<ul>
<li>version 1.0 - March, 2009
    <ul>
      <li>Initial Release</li>
    </ul></li>
<li>version 1.0.1 - March, 2009
    <ul>
      <li>Minor template change.</li>
      <li>Set a default success message.</li>
    </ul></li>
<li>version 1.0.2 - April, 2009
    <ul>
      <li>Fix minor issue with permissions checking.</li>
    </ul></li>
</ul>
<li>version 1.0.4 - October, 2009
    <ul>
      <li>Minor bug fixes.</li>
    </ul></li>
<li>version 1.0.6 - March, 2010
    <ul>
      <li>Updated to work with new CGExtensions.</li>
    </ul>
</li>
<li>version 1.1 - May, 2010
    <ul>
    <li>Many new parameters, and options.</li>
    </ul>
</li>
<li>version 1.2 - May, 2010
    <ul>
    <li>Fixes security vulnerability.</li>
    </ul>
</li>
<li>version 1.3.2 - March, 2011
    <ul>
    <li>Move changelog out of lang file.</li>
    <li>Numerous bug fixes and enhancements.</li>
    </ul>
</li>
<li>version 1.3.3 - March, 2011
    <ul>
    <li>Fixes upgrade to add the notified field.</li>
    <li>Update dependencies</li>
    </ul>
</li>
<li>version 1.3.4 - May, 2011
    <ul>
    <li>Bug Fixes.</li>
    </ul>
</li>
<li>version 1.3.5 - June, 2011
    <ul>
    <li>Bug Fixes.</li>
    </ul>
</li>
<li>Version 1.3.6 - July, 2011
  <ul>
    <li>Bug fixes.</li>
  </ul>
</li>
<li>Version 1.3.7 - August, 2011
  <ul>
    <li>Bug fixes... now should work with CMSMS 1.10</li>
    <li>Adds noredirect param.</li>
  </ul>
</li>
<li>Version 1.3.8 - September, 2011
  <ul>
    <li>Bug fixes... </li>
  </ul>
</li>
<li>Version 1.4 - September, 2011
  <ul>
     <li>Adds automatic moderation detection</li>
  </ul>
</li>
<li>Version 1.5 - October, 2011
  <ul>
     <li>Re-adds the origurl thing (but as a property of the comment).</li>
  </ul>
</li>
<li>Version 1.5.1 - October, 2011
  <ul>
     <li>Adjust the origurl to be the feedback_origurl if available.</li>
  </ul>
</li>
<li>Version 1.5.2 - October, 2011
  <ul>
     <li>Adds the redirectextra param for the default action.</li>
  </ul>
</li>
<li>Version 1.5.3 - October, 2011
  <ul>
     <li>Fixes CMSMS 1.10 problem.</li>
  </ul>
</li>
<li>Version 1.5.4 - November, 2011
  <ul>
     <li>E_STRICT fixes.</li>
  </ul>
</li>
<li>Version 1.5.7 - June, 2012
  <ul>
     <li>Numerous minor fixes.</li>
     <li>Bump dependencies.</li>
     <li>Move help externally.</li>
  </ul>
</li>
<li>Version 1.6.x
	<ul>
	<li>Adds a preference or two</li>
	<li>Numerous minor fixes.</li>
	<li>Adds simple honeypot captcha.</li>
	<li>Some terminology changes.</li>
	<li>Bootstrapify the default form template.</li>
        <li>html cleaning.</li>
	</ul>
</li>
<li>Version 1.6.x
	<ul>
	<li>Numerous bug fixes.</li>
	<li>Adds an event for when a comment is edited (either in the frontend or the admin).</li>
	<li>Now use smarty scopes.</li>
	</ul>
</li>
<li>Version 1.7
	<ul>
	<li>Numerous bug fixes.</li>
	<li>Now use smarty scopes for most frontend displays.
          <p><strong>Note:</strong> These changes may introduce compatibility problems.  Particularly where variables from ReviewManager templates are used outside of the template call.  You may need to explicitly assign these variables to the global scope.</p>
        </li>
	</ul>
	</li>

<li>Version 1.7.6
	<ul>
	<li>Fixes support for new captcha module.</li>
	</ul>
	</li>

<li>Version 1.8
	<ul>
	<li>Adss support for the since parameter.</li>
	<li>Cleanup the admin edit-comment form a bit.</li>
	</ul>
	</li>

<li>Version 1.8.2
	<ul>
	<li>Bug fixes</li>
	</ul>
	</li>

<li>Version 1.8.2
	<ul>
	<li>Primary template types now integrate with Design Manager.</li>
	</ul>
	</li>

<li>Version 2.0
	<p class="warning"><strong>Note:</strong> This is a significant refactoring of the ReviewManager module.  Much has changed.  Though there should be no data loss, those doing upgrades
	will need to edit re-generate and re-style your templates, and to adjust the options and various calls to ReviewManager.</p>
	<ul>
	<li>Now require at least CMSMS 2.2-beta3</li>
	<li>Now uses DesignManager for most templates.
	    <p>Though your templates have been preserved in DesignManager, they may not be compatibile with this new version,  and the names of templates may have changed.</p>
	</li>
	<li>Now uses hooks.</li>
	<li>Gets rid of the policy=session stuff and continually uses the session.  Redirection options are much more consistent.</li>
	<li>Adds stopforumspam functionality for spam detection.</li>
        <li>Integrates with alerts to notify of draft comments.</li>
	<li>
	</ul>
	</li>

<li>Version 2.1
	<p class="warning">The email notfication functionality is now deprecated, and soon will be replaced with notifications via the CGNotifier module.</p>
	<ul>
	<li>Now use the UserNotify hook to send notifications.</li>
	<li>Adds another field to the comment table.</li>
  	<li>Now keep track of feu_uid etc. when a logged in FEU user submits a feedback message.</li>
	<li>Minor fixes.</li>
	</ul>
	</li>

<li>Version 2.2
	<p class="warning">This version introduces CSRF protection into form processing.  You must add the <code>{cge_form_csrf}</code> tag to your comment form templates, somewhere within the form itself. </p>
	<ul>
	<li>Now use CSRF protection as provided by CGExtensions.</li>
	</ul>
</li>
</ul>
