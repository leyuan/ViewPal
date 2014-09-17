
<?php foreach ($news as $news_item): ?>
<div>
    
    <h2 class='news-title'><?php echo $news_item['title'] ?></h2>
    <div class="news-excerpt">
        <?php echo $news_item['text'] ?>
    </div>
    <span id="viewpal"></span>
</div>

<?php endforeach;

	
