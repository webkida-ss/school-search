<?php
$page = get_page(get_the_ID());
$slug = $page->post_name;
?>

<!-- 完了メッセージ -->
<?php if ($slug === 'request-doc-complete') { ?>
	<div>
		<div class="top-msg">
			資料請求お申込みありがとうございます！
			<span class="lang-china">
				<span class="lang-china-han">資料請求お申込みありがとうございます！(外1)　</span>
				<span class="lang-china-kan">資料請求お申込みありがとうございます！(外2)</span>
			</span>
		</div>

		<div class="send-mail">
			同じ内容をメールでお送りしますので、ご確認ください
			<span class="lang-china-han">同じ内容をメールでお送りしますので、ご確認ください(外1)</span>
			<span class="lang-china-kan">同じ内容をメールでお送りしますので、ご確認ください(外2)</span>
		</div>

		<div class="remind">
			1時間以内メールが届いていない場合は<a href="<?php echo esc_url(home_url() . '/contact/'); ?>">こちら</a>
			<span class="lang-china-han">1時間以内メールが届いていない場合は<a href="<?php echo esc_url(home_url() . '/contact/'); ?>">こちら(外1)</a></span>
			<span class="lang-china-kan">1時間以内メールが届いていない場合は<a href="<?php echo esc_url(home_url() . '/contact/'); ?>">こちら(外2)</a></span>
		</div>
	</div>
<?php } else if ($slug === 'request-opencampus-complete') { ?>
	<div>
		<div class="top-msg">
			イベントお申込みありがとうございます！
			<span class="lang-china-han">イベントお申込みありがとうございます！(外1)　</span>
			<span class="lang-china-kan">イベントお申込みありがとうございます！(外2)</span>
		</div>

		<div class="send-mail">
			同じ内容をメールでお送りしますので、ご確認ください
			<span class="lang-china-han">同じ内容をメールでお送りしますので、ご確認ください(外1)</span>
			<span class="lang-china-kan">同じ内容をメールでお送りしますので、ご確認ください(外2)</span>
		</div>

		<div class="remind">
			1時間以内メールが届いていない場合は<a href="<?php echo esc_url(home_url() . '/contact/'); ?>">こちら</a>
			<span class="lang-china-han">1時間以内メールが届いていない場合は<a href="<?php echo esc_url(home_url() . '/contact/'); ?>">1時間以内メールが届いていない場合は(外1)</a></span>
			<span class="lang-china-kan">1時間以内メールが届いていない場合は<a href="<?php echo esc_url(home_url() . '/contact/'); ?>">1時間以内メールが届いていない場合は(外2)</a></span>
		</div>
	</div>
<?php } ?>

<!-- 会員登録 -->
<div class="contact-register">
	<div class="contact-register__container">
		<p class="contact-register__top-msg">
			今ご入力した内容で会員登録しますか？
			<span class="lang-china-han">今ご入力した内容で会員登録しますか？(外1)</span>
			<span class="lang-china-kan">今ご入力した内容で会員登録しますか？(外2)</span>
		</p>
		<a href="#">
			<button class="contact-register__btn">
				会員登録
				<span class="lang-china">
					<span class="lang-china-han">会員登録(外1) </span>
					<span class="lang-china-kan">会員登録(外2)</span>
				</span>
			</button>
		</a>
		<p class="contact-register__bottom-msg">
			登録すると今後の資料請求・イベント予約に楽！
			<span class="lang-china-han">登録すると今後の資料請求・イベント予約に楽！(外1)</span>
			<span class="lang-china-kan">登録すると今後の資料請求・イベント予約に楽！(外2)</span>
		</p>
	</div>
</div>