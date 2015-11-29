        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/ajax.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="js/jquery.cslider.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="js/jquery.inview.js"></script>
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript">
        function clean(e){
        var textfield = document.getElementById(e);
        var groserias = ["puta", "puto","marica","mierda","wn","weon","hueon","huevon","ctm", "conchetumadre", "conchatumadre", "conchesumadre","conshasumadre","concha","pico","raja","culo","culia","culiao","qlo","qla","chucha","shusha","ahueonado","ahueonao","maraca","aweonao","huevon","malparidos","maricon","mrd","xuxa"]
        //var regex ="["mierda"]"/gi;
        for(var i=0; i<groserias.length; i++){
        var regex= new RegExp("(^|\\s)"+groserias[i]+"($|(?=\\s))","gi")
        textfield.value = textfield.value.replace(regex, function($0, $1){return $1 + ""});
                                            }   
        }
</script>
        