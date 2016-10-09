<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 09.10.2016
 * Time: 14:07
 */
include 'common/menu.php';
?>
<script>
    document.getElementById("home").className = '';
    document.getElementById("users").className = 'active';
</script>
<style>
    .btn-default {
        background-color: grey;
        color: white;
    }
    .form-group {
        margin-left: 30px;
    }
</style>
<form role="form" class="form-inline">
    <!--<div class="form-group">
        <label for="email" style="padding: 10px;">Email</label>
        <input type="text" name="email" class="form-control" id="email" style="display: inline; width: 20%; margin-right: 20%;">
        Status
        <select name="statusList" form="userSearchForm">
            <option value="">none</option>
            <option value="paid">paid</option>
            <option value="free">free</option>
        </select>
    </div>-->
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" id="email" style="margin-right: 50px;">
    </div>
    <div class="form-group">
        <label for="status">Status:</label>
        <select id="status" name="statusList">
            <option value="">none</option>
            <option value="paid">paid</option>
            <option value="free">free</option>
        </select>
    </div>
    <div id="search">
        <button type="submit" class="btn btn-default">Search</button>
    </div>
</form>
