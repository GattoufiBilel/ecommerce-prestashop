<script>
    {literal}
        document.addEventListener("DOMContentLoaded", function(event) { 
            var jqxhr = $.get("{/literal}{$url_cron}{literal}",function(){
              console.log("cron King-Avis success");
            })
            .fail(function() {
              console.log("cron King-Avis error");
            })
        });
    {/literal}
</script>