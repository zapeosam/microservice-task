Resolution
-------------

To change the resolution "xvfb" has to be installed on the server

Also in "app/config/config.yml" the config

<pre>
knp_snappy:  
    pdf:
        # ..
        binary:     %kernel.root_dir%/../vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64
        # ..
</pre>

should be changed to 

<pre>
knp_snappy:  
    pdf:
        # ..
        binary:     xvfb-run %kernel.root_dir%/../vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64
        # ..
</pre>