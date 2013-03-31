<div class="page-header">
    <h1>Bootstrap widgets</h1>
</div>

<div class="page-header">
        <h1>Navbar</h1>
</div>
<?php
$navbar['items'][]= array(
						array('font-icon'=>'&#x0021;','label'=>'Home','link'=>site_url()),
						array('font-icon'=>'&#x006e;','label'=>'System Management','link'=>'#',
							'items'=>array(
								array('icon'=>'icon-bookmark','label'=>'Unit','link'=>site_url('c=core_unit')),
								array('icon'=>'icon-bookmark','label'=>'Modules ','link'=>site_url('c=core_module')),
								array('icon'=>'icon-bookmark','label'=>'Group','link'=>site_url('c=core_group')),
								array('class'=>'divider'),
								array('icon'=>'icon-bookmark','label'=>'User','link'=>site_url('c=core_user')),
								array('icon'=>'icon-bookmark','label'=>'Application','link'=>"#",
									'items'=>array(
										array('icon'=>'icon-bookmark','label'=>'Application','link'=>site_url('c=core_application')),
										array('icon'=>'icon-bookmark','label'=>'Application Unit','link'=>site_url('c=core_group'))
									)
								),
									array('icon'=>'icon-bookmark','label'=>'Menu','link'=>"#",
									'items'=>array(
										array('icon'=>'icon-bookmark','label'=>'Menu','link'=>site_url('c=core_application')),
										array('icon'=>'icon-bookmark','label'=>'Group Menu','link'=>site_url('c=core_group')),
										array('icon'=>'icon-bookmark','label'=>'Actions','link'=>site_url('c=core_group')),
									)
								),
						)));
echo Modules::run('wbootstrap/navbar', $navbar); 
?>

<pre class="prettyprint">
$navbar['items'][]= array(
	array('font-icon'=>'&#x0021;','label'=>'Home','link'=>site_url()),
		array('font-icon'=>'&#x0021;','label'=>'System Management','link'=>'#',
			'items'=>array(
				array('icon'=>'icon-bookmark','label'=>'Unit','link'=>site_url('c=core_unit')),
				array('icon'=>'icon-bookmark','label'=>'Modules ','link'=>site_url('c=core_module')),
				array('icon'=>'icon-bookmark','label'=>'Group','link'=>site_url('c=core_group')),
				array('class'=>'divider'),
				array('icon'=>'icon-bookmark','label'=>'User','link'=>site_url('c=core_user')),
				array('icon'=>'icon-bookmark','label'=>'Application','link'=>"#",
					'items'=>array(
						array('icon'=>'icon-bookmark','label'=>'Application','link'=>site_url('c=core_application')),
							array('icon'=>'icon-bookmark','label'=>'Application Unit','link'=>site_url('c=core_group'))
								)
						),
				array('icon'=>'icon-bookmark','label'=>'Menu','link'=>"#",
					'items'=>array(
							array('icon'=>'icon-bookmark','label'=>'Menu','link'=>site_url('c=core_application')),
							array('icon'=>'icon-bookmark','label'=>'Group Menu','link'=>site_url('c=core_group')),
							array('icon'=>'icon-bookmark','label'=>'Actions','link'=>site_url('c=core_group')),
									)
								),
							)
			)
	);
</pre>
<pre class="prettyprint">
	echo Modules::run('wbootstrap/navbar', $navbar); 
</pre>

<div class="page-header">
    <h1>Button Dropdown</h1>
</div>
<?php
$btndropdown['items'][] = array(
      array('icon'=>'icon-share-3','label'=>'Social','position'=>'dropup',
             'items'=>array(
                    array('icon'=>'icon-facebook-2','label'=>'Facebook','link'=>site_url('c=core_unit')),
                    array('icon'=>'icon-google-plus-2','label'=>'Google Plus','link'=>site_url('c=core_unit')),
            )
        ),
    );
$btndropdown['items'][] = array(
      array('font-icon'=>'&#xe04b;','label'=>'Save As',
             'items'=>array(
                  array('icon'=>' icon-file-pdf','label'=>'pdf','link'=>site_url('c=core_unit')),
                  array('icon'=>' icon-file-excel','label'=>'excel','link'=>site_url('c=core_unit')),
                  array('icon'=>'icon-share-3','label'=>'Share','class'=>'divider'),
                  array('icon'=>'icon-share-3','label'=>'Share','link'=>site_url('c=core_unit'),
                        'items'=>array(
                              array('icon'=>'icon-facebook-2','label'=>'Facebook','link'=>site_url('c=core_unit')),
                              array('icon'=>'icon-google-plus-2','label'=>'Google Plus','link'=>site_url('c=core_unit')),
                          )
                    ),
              )
        ),
    );

echo Modules::run('wbootstrap/btndropdown', $btndropdown); 
?>
<br/><br/>
<pre class="prettyprint">
	$btndropdown['items'][] = array(
      array('icon'=>'icon-home','label'=>'Home','position'=>'dropup',
             'items'=>array(
                  array('icon'=>'icon-bookmark','label'=>'Unit','link'=>site_url('c=core_unit')),
                  array('font-icon'=>'a','label'=>'Unit','link'=>site_url('c=core_unit'),
                        'items'=>array(
                              array('icon'=>'icon-bookmark','label'=>'Unit','link'=>site_url('c=core_unit')),
                              array('font-icon'=>'a','label'=>'Unit','link'=>site_url('c=core_unit')),
                          )
                    ),
              )
        ),
    );
</pre>
<pre class="prettyprint">
	echo Modules::run('wbootstrap/btndropdown', $btndropdown); 
</pre>



<div class="page-header">
    <h1>Breadcrumb</h1>
</div>
<?php
$breadcrumb ='';
$setup= array('divider'=>'>');
$breadcrumb['items'][] = array(
         array('icon'=>'icon-home','label'=>'Home','link'=>site_url()),
         array('icon'=>'icon-wrench','label'=>'system management','link'=>'#'),
         array('font-icon'=>'&#xe017;','label'=>'module','link'=>'#'),
         array('label'=>'add module','class'=>'active'),
    );

echo Modules::run('wbootstrap/breadcrumb', $breadcrumb, $setup); 
?>

<pre class="prettyprint">
$breadcrumb['setup'] = array('divider'=>'>');	
$breadcrumb['items'][] = array(
         array('icon'=>'icon-home','label'=>'Home','link'=>site_url()),
         array('icon'=>'icon-share-3','label'=>'Social','link'=>'#'),
         array('icon'=>'icon-share-3','label'=>'Social','link'=>'#'),
         array('icon'=>'icon-share-3','label'=>'Social','class'=>'active'),
    );
</pre>
<pre class="prettyprint">
	echo Modules::run('wbootstrap/breadcrumb', $breadcrumb, $setup);  
</pre>

<div class="page-header">
    <h1>Breadcrumb</h1>
</div>
<?php echo Modules::run('wbootstrap/pagination', $breadcrumb);  ?>


<div class="page-header">
    <h1>Alerts</h1>
</div>

<?php 
$alert['items'][] = array('class'=>'alert-error','title'=>'this is title','content'=>'this is content');
$alert['items'][] = array('class'=>'alert-info','title'=>'this is title','content'=>'this is content');
$alert['items'][] = array('class'=>'alert-success','title'=>'this is title','content'=>'this is content');
			

echo Modules::run('wbootstrap/alert',$alert);  ?>
params
<pre class="prettyprint">
$alert['items'][] = array('class'=>'alert-error','title'=>'this is title','content'=>'this is content');
$alert['items'][] = array('class'=>'alert-info','title'=>'this is title','content'=>'this is content');
$alert['items'][] = array('class'=>'alert-success','title'=>'this is title','content'=>'this is content');
</pre>
widget usage
<pre class="prettyprint">
echo Modules::run('wbootstrap/alert',$alert);  
</pre>
