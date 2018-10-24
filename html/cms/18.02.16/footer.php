	<div id="footer">
		<div class="left-col">
			<h4>Recent Posts </h4>
			<ul class="recent-posts">
            <?php query_posts('showposts=5'); ?>
<?php while (have_posts()) : the_post(); ?>
				<li>
					<strong><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent link to'); ?> <?php the_title(); ?>"><?php the_title(); ?></a></strong><br />
					<small><?php the_time('m-d-Y') ?></small>
				</li>
			<?php endwhile;?>
			</ul>
		</div>
		<div class="left-col">
			<h4>Recently Commented</h4>
			<ul class="recent-comments">
				<li><a href="#">Nick:</a> This is a test comment</li>
				<li><a href="#">Jen:</a> Hello, nice day!</li>
				<li><a href="#">Someone:</a> Wow, this is another test comment</li>
				<li><a href="#">Admin:</a> This is a comment</li>
			</ul>
		</div>
		<div class="right-col">
			<h4>About</h4>
			<p>Welcome to my design blog and portfolio showcase. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p>
			<p>Feel free to <a href="#"> contact me.</a></p>
		</div>
		<hr class="clear" />
	</div>
	<!--/footer -->
</div>
<!--/page -->
</body>
</html>
