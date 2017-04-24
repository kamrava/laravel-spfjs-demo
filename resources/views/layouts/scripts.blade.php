<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="/custom.js"></script>
<script type="text/javascript" src="{{ asset('vendor/laravel-spf/js/laravel-spf.js')}}"></script>
<script>
$(document).on("spfclick", function() {
// Show progress bar
NProgress.start();
});

$(document).on("spfrequest", function() {
// Increment progress as request is made
NProgress.inc();
});

$(document).on("spfprocess", function() {
// Set progress bar width to 100%
NProgress.done();
});

$(document).on("spfdone", function() {
// Finish request and remove progress bar
NProgress.remove();
});
</script>
