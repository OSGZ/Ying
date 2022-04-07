<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<nav class="nav">
<ul class="flat">
<li class="active"><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
    <?php $this->widget('Widget_Contents_Page_List')
               ->parse('<li class="active"><a href="{permalink}">{title}</a></li>'); ?></ul>
                </nav>
            </div>
        <h1 class="post-title" itemprop="name headline">
            <?php $this->title() ?>
        </h1>
        <div class="meta">
                <span><?php $this->date('F j, Y'); ?></span>                 
                <?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li></span>
        </ul>
        </div>  
    <div class="post-content" itemprop="articleBody">
    <?php $this->content(); ?>

<?php $this->need('footer.php'); ?>