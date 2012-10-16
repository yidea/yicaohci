<!--  tweets-->
<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
    new TWTR.Widget({
        version: 2,
        type: 'profile',
        rpp: 4,
        interval: 6000,
        width: 300,
        height: 300,
        theme: {
            shell: {
                background: "#bfbfbf",
                color: '#ffffff'
            },
            tweets: {
                background: '#eeeeee',
                color: '#333333',
                links: '#1369ab'
            }
        },
        features: {
            scrollbar: false,
            loop: false,
            live: false,
            hashtags: false,
            timestamp: false,
            avatars: false,
            behavior: 'default'
        }
    }).render().setUser('Yidea').start();

</script><!--       tweets end-->