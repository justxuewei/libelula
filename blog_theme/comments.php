<?php
if ( post_password_required() )
    return;
?>
<div id="comments" class="responsesWrapper">
    <meta content="UserComments:<?php echo number_format_i18n( get_comments_number() );?>" itemprop="interactionCount">
    <h3 class="comments-title">There are <span class="commentCount"><?php echo number_format_i18n( get_comments_number() );?></span> comments</h3>
    <ol class="commentlist">
        <?php
        wp_list_comments( array(
            'style'       => 'ol',
            'short_ping'  => true,
            'avatar_size' => 48,
            'type'        =>'comment',
            'callback'    =>'simple_comment',
        ) );
        ?>
    </ol>
    <nav class="navigation comment-navigation u-textAlignCenter" data-fuck="<?php the_ID();?>">
    <?php paginate_comments_links(array('prev_next'=>true)); ?>
    </nav>
    <?php if(comments_open()) : ?>
        <div id="respond" class="respond" role="form">
            <h2 id="reply-title" class="comments-title"><?php comment_form_title( '', 'Reply to %s' ); ?> <small>
                    <?php cancel_comment_reply_link(); ?>
                </small></h2>
            <?php if (!$user_ID ) : ?>
                <p>You must be <a href="https://xxn9800.uta.cloud/libelula/blog/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
            <?php else : ?>
                <form action="https://xxn9800.uta.cloud/libelula/blog/wp-comments-post.php" method="post" class="commentform" id="commentform">
                    <?php if ( $user_ID ) : ?>
                        <p class="warning-text" style="margin-bottom:10px"><a href="https://xxn9800.uta.cloud/libelula/blog/wp-admin/profile.php"><?php echo $user_identity; ?></a> Login | <a class="link-logout" href="<?php echo wp_logout_url(get_permalink()); ?>">Logout</a></p>
                        <textarea class="form-control" rows="3" id="comment" onkeydown="if(event.ctrlKey&&event.keyCode==13){document.getElementById('submit').click();return false};" class="form-control" tabindex="1" name="comment"></textarea>
                    <?php else : ?>
                        <textarea class="form-control" rows="3" id="comment" onkeydown="if(event.ctrlKey&&event.keyCode==13){document.getElementById('submit').click();return false};" tabindex="1" name="comment"></textarea>
                        <div class="commentform-info">
                            <label id="author_name" for="author">
                                <input class="form-control" id="author" type="text" tabindex="2" value="<?php echo $comment_author; ?>" name="author" placeholder="Name" required>
                            </label>
                            <label id="author_email" for="email">
                                <input class="form-control" id="email" type="text" tabindex="3" value="<?php echo $comment_author_email; ?>" name="email" placeholder="Email" required>
                            </label>
                            <label id="author_website" for="url">
                                <input class="form-control" id="url" type="text" tabindex="4" value="<?php echo $comment_author_url; ?>" name="url" placeholder="Website">
                            </label>
                        </div>
                    <?php endif; ?>
                    <div class="btn-group commentBtn" role="group">
                        <input name="submit" type="submit" id="submit" class="btn btn-sm btn-danger btn-block" tabindex="5" value="Comments" /></div>
                    <?php comment_id_fields(); ?>
                </form>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</div>