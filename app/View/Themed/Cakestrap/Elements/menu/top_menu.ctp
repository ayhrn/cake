<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
<div class="container">

	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button><!-- /.navbar-toggle -->
		<?php echo $this->Html->Link('AppStore', '/applications/', array('class' => 'navbar-brand')); ?>
	</div><!-- /.navbar-header -->
	
	<div class="collapse navbar-collapse navbar-ex1-collapse ">
		<ul class="nav navbar-nav">
                        <li><a href="/pages/apropos/"><?php echo __("À Propos");?></a></li>
                        <li><a href="/applications/"><?php echo ("Applications");?></a></li>
			<li><a href="/categories/"><?php echo __("Categories");?></a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo __("Language");?><b class="caret"></b></a>
				<ul class="dropdown-menu">
                                    <?php echo $this->I18n->flagSwitcher(array('class' => 'languages',
                                    'id' => 'language-switcher'));?>
				</ul>
			</li>
		</ul><!-- /NAV LEFT -->
		
		<ul class="nav navbar-nav navbar-right">
            <li class="active">
                <?php if ($this->Session->check('Auth.User')) {
                    echo $this->Html->link(__("Hello") . " ". $this->Session->read('Auth.User.username') . " (" . $this->Session->read('Auth.User.role') . ")",
                                            array('controller' => 'users', 'action' => 'view', $this->Session->read('Auth.User.id')));
                    echo "</li><li>";
                    if ($this->Session->read('Auth.User.role') == "admin") {
                        echo $this->Html->link(__("Add user"), array(
                            'controller' => 'users',
                            'action' => 'add'));
                        echo "</li><li>";
                    }
                    echo $this->Html->link(__("Log out"), array(
                        'controller' => 'users',
                        'action' => 'logout'));
                } else {
                    echo $this->Html->link(__("Login"), array(
                        'controller' => 'users',
                        'action' => 'login')
                    );
                }
                ?>
            </li>
		</ul><!-- /NAV RIGHT -->
		
	</div><!-- /.navbar-collapse -->
	</div>
</nav><!-- /.navbar navbar-default -->