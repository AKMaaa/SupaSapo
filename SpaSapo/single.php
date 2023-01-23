<?php
if (in_category('infomation')) {
    include('single-infomation.php');
} else if (in_category('news')) {
    include('single-news.php');
}
