<form method="POST" action="/unicode">
<div>
    <input type="text" name="username" placeholder="Nhập tên ..."/>
    <input type="hidden" name="_method" value="Put"/>
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"/>
</div>
<button type="submit">Submit</button>
</form>
