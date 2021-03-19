<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Chart with VueJS</title>

    </head>
    <body>
        <div id="app">
            {!! $chart->container() !!}
        </div>
        <div id="app2">
            {!! $chart2->container() !!}
        </div>
        <div id="app3">
            {!! $chart3->container() !!}
        </div>
        <script src="https://unpkg.com/vue"></script>
        <script>
            var app = new Vue({
                el: '#app',
            });
            var app2 = new Vue({
                el: '#app2',
            });
            var app3 = new Vue({
                el: '#app3',
            });
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
        
        <div>
        	{!! $chart->script() !!}
        </div>
        
        <div class="container">
	        <div class="col-md-3">
	        	{!! $chart2->script() !!}
	        </div>
	        <div class="col-md-3">
	        	{!! $chart3->script() !!}
	        </div>
        </div>
        
    </body>
</html>