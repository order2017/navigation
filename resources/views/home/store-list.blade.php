<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>表单页面</title>
    <link rel="stylesheet" href="http://cdn.amazeui.org/amazeui/2.7.2/css/amazeui.css">
</head>
<body>
<form action="{{ url('store-list') }}" method="post" class="am-form">
    <fieldset>
        <legend>提交信息</legend>
        <div class="am-form-group">
            <label for="name">姓名：</label>
            <input type="text" id="name" name="name" placeholder="输入姓名" class="am-form-field" required/>
        </div>
        <div class="am-form-group">
            <label for="shop">商店 / 公司名称：</label>
            <input type="text" id="shop" name="shop" placeholder="输入商店" class="am-form-field" required/>
        </div>
        <div class="am-form-group">
            <label for="doc-select-1">所在城市：</label>
            <select id="doc-select-1" name="city" required>
                <option value="">-=请选所在城市=-</option>
                <option value="东莞市">东莞市</option>
                <option value="深圳市">深圳市</option>
                <option value="广州市">广州市</option>
            </select>
            <span class="am-form-caret"></span>
        </div>
        <div class="am-form-group">
            <label for="add">地址：</label>
            <input type="text" id="add" name="add" placeholder="输入地址" class="am-form-field" required/>
        </div>
        <button class="am-btn am-btn-secondary" type="submit">提交</button>
    </fieldset>
</form>
</body>
<script src="http://cdn.amazeui.org/amazeui/2.7.2/js/amazeui.js"></script>
</html>