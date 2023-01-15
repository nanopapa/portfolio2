<?php get_header(); ?>
<!--==============================================================
ContactPage
============================================================== -->
<section class="ContactPage wrapper">
    <div class="section__title fadein">
        <h2>Contact</h2>
        <p>お問い合わせ</p>
    </div>
    <div class="Contact__form">
        <ul>
            <li>
                <label for="name01">お名前<span class="must">必須</span></label>
                <input type="text" name="your-name01" id="name01">
            </li>
            <li>
                <label for="name02">ふりがな<span class="must">必須</span></label>
                <input type="text" name="your-name02" id="name02">
            </li>
            <li>
                <label for="number">電話番号</label>
                <input type="tel" name="your-number" id="number">
            </li>
            <li>
                <label for="address">メールアドレス<span class="must">必須</span></label>
                <input type="email" name="your-address" id="address">
            </li>
            <li>
                <label for="message">お問い合わせ内容<span class="must">必須</span></label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
            </li>
        </ul>

        <div class="submit__btn">
            <input type="submit" value="確認画面へ" class="submit">
        </div>
    </div>
</section>

<?php get_footer(); ?>