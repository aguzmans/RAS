<?php

/* OsdRetireBundle:Default:index.html.twig */
class __TwigTemplate_4e32fdff61e81ac50ed59ee959b087d262f65d78c755b787ba0d60834e8e19a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'maincontenttitle' => array($this, 'block_maincontenttitle'),
            'maincontentdata' => array($this, 'block_maincontentdata'),
            'form_row' => array($this, 'block_form_row'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_maincontenttitle($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Search workers in the retirement database</h1>
";
    }

    // line 6
    public function block_maincontentdata($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if (array_key_exists("searchWorkerForm", $context)) {
            // line 8
            echo "    <div id=\"search-box\">
    <fieldset><legend>Select the search criteria</legend>
        ";
            // line 10
            $this->displayBlock('form_row', $context, $blocks);
            // line 66
            echo "    </fieldset>
    </div>            
  ";
        }
        // line 69
        echo "  ";
        if (array_key_exists("aWorkerList", $context)) {
            echo " 

    <fieldset><legend>Search results:</legend>
    <div id=\"search-results\"> 
            <table>
                <tr>
                    <th>Action</th>
                    <th>Omang</th>
                    <th>Title</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Birth day</th>
                    <th>First appointment</th>
                    <th>Retirement date</th>
                    <th>Time to retirement</th>
                    <th>File Number</th>
                    <th>Worker Status</th>
                </tr>
                ";
            // line 87
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["aWorkerList"]) ? $context["aWorkerList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["aWorker"]) {
                // line 88
                echo "                ";
                if ($this->getAttribute((isset($context["aWorker"]) ? $context["aWorker"] : null), "retireYear", array(), "any", true, true)) {
                    // line 89
                    echo "                  ";
                    if (((isset($context["colorOrange"]) ? $context["colorOrange"] : null) > $this->getAttribute((isset($context["aWorker"]) ? $context["aWorker"] : null), "yearsLeft"))) {
                        // line 90
                        echo "                      <tr bgcolor=\"orange\">
                      ";
                        // line 91
                        if (((isset($context["colorRed"]) ? $context["colorRed"] : null) > $this->getAttribute((isset($context["aWorker"]) ? $context["aWorker"] : null), "monthsLetf"))) {
                            // line 92
                            echo "                            <tr bgcolor=\"red\">                                
                        ";
                        } elseif ((0 > $this->getAttribute((isset($context["aWorker"]) ? $context["aWorker"] : null), "yearsLeft"))) {
                            // line 94
                            echo "                                    <tr bgcolor=\"red\">                                    
                      ";
                        }
                        // line 95
                        echo "                  
                      
                  ";
                    } else {
                        // line 98
                        echo "                                 <tr bgcolor=\"Azure\">           
                                            ";
                    }
                    // line 100
                    echo "                            <td><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("osd_retire_editworkerpage", array("id" => $this->getAttribute((isset($context["aWorker"]) ? $context["aWorker"] : null), "idWorker"))), "html", null, true);
                    echo "\">Edit</a> 
                                <a href=\"";
                    // line 101
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("osd_retire_deleteworkerpage", array("id" => $this->getAttribute((isset($context["aWorker"]) ? $context["aWorker"] : null), "idWorker"))), "html", null, true);
                    echo "\" 
                                   onclick=\"return confirm('Do you really want to delete this worker')\">Delete</a></td> 
                            <td>";
                    // line 103
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aWorker"]) ? $context["aWorker"] : null), "omang"), "html", null, true);
                    echo "</td>                        
                            <td>";
                    // line 104
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aWorker"]) ? $context["aWorker"] : null), "workerTitle"), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 105
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aWorker"]) ? $context["aWorker"] : null), "workerName"), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 106
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aWorker"]) ? $context["aWorker"] : null), "workerSurname"), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 107
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["aWorker"]) ? $context["aWorker"] : null), "birthDay"), "Y-m-d"), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 108
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["aWorker"]) ? $context["aWorker"] : null), "dateOfEmployment"), "Y-m-d"), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 109
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["aWorker"]) ? $context["aWorker"] : null), "retireYear"), "Y-m-d"), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 110
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aWorker"]) ? $context["aWorker"] : null), "timeToRetirement"), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 111
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aWorker"]) ? $context["aWorker"] : null), "fileNumber"), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 112
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["aWorker"]) ? $context["aWorker"] : null), "aIdWorkerStatus"), "description"), "html", null, true);
                    echo "</td>
                        </tr>
                ";
                }
                // line 115
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aWorker'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "            </table>
    </div>             
    </fieldset>
           
  ";
        }
        // line 121
        echo "  ";
        if (array_key_exists("persisted", $context)) {
            // line 122
            echo "    <div>";
            echo twig_escape_filter($this->env, (isset($context["persisted"]) ? $context["persisted"] : null), "html", null, true);
            echo "</div>
  ";
        }
    }

    // line 10
    public function block_form_row($context, array $blocks = array())
    {
        // line 11
        echo "            ";
        ob_start();
        // line 12
        echo "        <form action=\"";
        echo $this->env->getExtension('routing')->getPath("osd_retire_searchpage");
        echo "\" method=\"post\" 
            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), 'enctype');
        echo " >
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "_token"), 'row');
        echo "
                <div id=\"omang-label\">
                    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "omang"), 'label');
        echo "            
                    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "omang"), 'errors');
        echo "
                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "omang"), 'widget');
        echo "
                </div>
            ";
        // line 20
        if ($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "workerTitle", array(), "any", true, true)) {
            // line 21
            echo "                <div id=\"title-worker\">
                    ";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "workerTitle"), 'label');
            echo "
                    ";
            // line 23
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "workerTitle"), 'errors');
            echo "
                    ";
            // line 24
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "workerTitle"), 'widget');
            echo "            
                </div>     
            ";
        }
        // line 27
        echo "            <div id=\"name-worker\">
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "workerName"), 'label');
        echo "
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "workerName"), 'errors');
        echo "
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "workerName"), 'widget');
        echo "                    
            </div>         
            <div id=\"surname-worker\">
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "workerSurname"), 'label');
        echo "
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "workerSurname"), 'errors');
        echo "
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "workerSurname"), 'widget');
        echo "            
            </div>
            <div id=\"Worker-status\">
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "aIdWorkerStatus"), 'label', array("label" => "Worker Status"));
        echo "
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "aIdWorkerStatus"), 'errors');
        echo "
                <div id=\"status-worker\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "aIdWorkerStatus"), 'widget');
        echo "</div>                 
            </div>      
            <div id=\"birthday\">
                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "birthDay"), 'label');
        echo "
                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "birthDay"), 'errors');
        echo "
                    <div id=\"worker-birthDay\">";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "birthDay"), 'widget');
        echo "</div>
            </div> 
            <div id=\"Date-of-employment\">
                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "dateOfEmployment"), 'label');
        echo "
                ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "dateOfEmployment"), 'errors');
        echo "
                    <div id=\"first-appointment\">";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "dateOfEmployment"), 'widget');
        echo "</div>
            </div>
            <div id=\"File-number\">
                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "fileNumber"), 'label');
        echo "
                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "fileNumber"), 'errors');
        echo "
                <div id=\"fine-number-field\">";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "fileNumber"), 'widget');
        echo "</div>                    
            </div>                  
            <div>
            <div id=\"form-submit\">
                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "search"), 'widget');
        echo "
            </div>                

            </div>
        </form>
            ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 64
        echo "     
        ";
    }

    public function getTemplateName()
    {
        return "OsdRetireBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 64,  325 => 59,  318 => 55,  310 => 53,  304 => 50,  300 => 49,  296 => 48,  290 => 45,  286 => 44,  282 => 43,  276 => 40,  272 => 39,  262 => 35,  248 => 30,  244 => 29,  237 => 27,  231 => 24,  223 => 22,  218 => 20,  213 => 18,  205 => 16,  200 => 14,  191 => 12,  188 => 11,  185 => 10,  174 => 121,  167 => 116,  161 => 115,  155 => 112,  139 => 108,  127 => 105,  114 => 101,  100 => 95,  96 => 94,  90 => 91,  84 => 89,  81 => 88,  77 => 87,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 54,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 38,  264 => 84,  258 => 34,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 21,  214 => 69,  177 => 122,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 33,  246 => 90,  243 => 88,  240 => 28,  238 => 85,  235 => 74,  230 => 82,  227 => 23,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 109,  135 => 107,  131 => 106,  119 => 103,  108 => 36,  102 => 32,  71 => 17,  67 => 15,  63 => 15,  59 => 14,  47 => 9,  28 => 3,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  68 => 14,  56 => 9,  50 => 66,  87 => 90,  72 => 16,  55 => 69,  41 => 7,  38 => 6,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  44 => 8,  27 => 4,  43 => 6,  40 => 8,  24 => 2,  31 => 5,  46 => 7,  26 => 6,  35 => 5,  29 => 3,  21 => 2,  25 => 3,  22 => 2,  201 => 92,  196 => 13,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 111,  142 => 59,  138 => 54,  136 => 56,  123 => 104,  121 => 46,  117 => 44,  115 => 43,  105 => 98,  101 => 32,  91 => 27,  69 => 25,  66 => 15,  62 => 23,  49 => 19,  32 => 4,  19 => 1,  209 => 17,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 110,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 100,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 92,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 14,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 10,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
