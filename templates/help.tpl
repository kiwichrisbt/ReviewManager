{* help.tpl *}

{tab_header name='general' label=$mod->Lang('help_tab_general')}
{tab_header name='usage' label=$mod->Lang('help_tab_usage')}
{tab_header name='import' label=$mod->Lang('help_tab_import')}
{tab_header name='about' label=$mod->Lang('help_tab_about')}


{tab_start name='general'}
{eval var=$mod->Lang('help_general')}


{tab_start name='usage'}
{eval var=$mod->Lang('help_usage')}


{tab_start name='import'}
{eval var=$mod->Lang('help_import')}


{tab_start name='about'}
{eval var=$mod->Lang('help_about')}


{tab_end}
<br>


