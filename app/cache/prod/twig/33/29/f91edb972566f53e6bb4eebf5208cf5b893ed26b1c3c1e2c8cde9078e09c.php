<?php

/* OsdRetireBundle:Retire:edit.html.twig */
class __TwigTemplate_3329f91edb972566f53e6bb4eebf5208cf5b893ed26b1c3c1e2c8cde9078e09c extends Twig_Template
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
        echo "    <h1>Worker Edition</h1>
";
    }

    // line 6
    public function block_maincontentdata($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if (array_key_exists("searchWorkerForm", $context)) {
            // line 8
            echo "    <fieldset><legend>Select the period of time to show</legend>
        ";
            // line 9
            $this->displayBlock('form_row', $context, $blocks);
            // line 60
            echo "    </fieldset>
  ";
        }
        // line 62
        echo "  ";
        if (array_key_exists("persisted", $context)) {
            // line 63
            echo "    <div>";
            echo twig_escape_filter($this->env, (isset($context["persisted"]) ? $context["persisted"] : null), "html", null, true);
            echo "</div>
  ";
        }
    }

    // line 9
    public function block_form_row($context, array $blocks = array())
    {
        // line 10
        echo "            ";
        ob_start();
        // line 11
        echo "        <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("osd_retire_editpersistpage", array("id" => (isset($context["idToEdit"]) ? $context["idToEdit"] : null))), "html", null, true);
        echo "\" method=\"post\" 
            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), 'enctype');
        echo " >
            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "_token"), 'row');
        echo "
            <div id=\"omang\">
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "omang"), 'label');
        echo "
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "omang"), 'errors');
        echo "
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "omang"), 'widget');
        echo "                    
            </div>  
            ";
        // line 19
        if ($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "workerTitle", array(), "any", true, true)) {
            // line 20
            echo "                <div id=\"title-worker\">
                    ";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "workerTitle"), 'label');
            echo "
                    ";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "workerTitle"), 'errors');
            echo "
                    <div id=\"worker-title\">";
            // line 23
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "workerTitle"), 'widget');
            echo "</div>           
                </div>     
            ";
        }
        // line 26
        echo "            <div id=\"name-worker\">
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "workerName"), 'label');
        echo "
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "workerName"), 'errors');
        echo "
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "workerName"), 'widget');
        echo "                    
            </div>         
            <div id=\"surname-worker\">
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "workerSurname"), 'label');
        echo "
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "workerSurname"), 'errors');
        echo "
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "workerSurname"), 'widget');
        echo "            
            </div>
            <div id=\"Worker-status\">
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "aIdWorkerStatus"), 'label', array("label" => "Worker Status"));
        echo "
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "aIdWorkerStatus"), 'errors');
        echo "
                <div id=\"status-worker\">";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "aIdWorkerStatus"), 'widget');
        echo "</div>                 
            </div>      
            <div id=\"birthday\">
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "birthDay"), 'label');
        echo "
                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "birthDay"), 'errors');
        echo "
                    <div id=\"worker-birthDay\">";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "birthDay"), 'widget');
        echo "</div>
            </div>  
            <div id=\"Date-of-employment\">
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "dateOfEmployment"), 'label');
        echo "
                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "dateOfEmployment"), 'errors');
        echo "
                    <div id=\"first-appointment\">";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "dateOfEmployment"), 'widget');
        echo "</div>
            </div>    
            <div>
                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "idWorker"), 'widget');
        echo "                    
            </div>                   
            <div id=\"form-submit\">
                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchWorkerForm"]) ? $context["searchWorkerForm"] : null), "edit"), 'widget');
        echo "
            </div>                  
        </form>
            ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 58
        echo "     
        ";
    }

    public function getTemplateName()
    {
        return "OsdRetireBundle:Retire:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 58,  195 => 55,  137 => 33,  110 => 23,  97 => 19,  53 => 62,  37 => 6,  211 => 62,  207 => 56,  197 => 51,  178 => 36,  175 => 47,  170 => 41,  165 => 43,  146 => 28,  83 => 24,  76 => 20,  70 => 11,  334 => 64,  325 => 59,  318 => 55,  310 => 53,  304 => 50,  300 => 49,  296 => 48,  290 => 45,  286 => 44,  282 => 43,  276 => 40,  272 => 39,  262 => 35,  248 => 30,  244 => 29,  237 => 27,  231 => 24,  223 => 22,  218 => 20,  213 => 18,  205 => 16,  200 => 52,  191 => 39,  188 => 11,  185 => 10,  174 => 121,  167 => 116,  161 => 42,  155 => 39,  139 => 108,  127 => 29,  114 => 101,  100 => 57,  96 => 94,  90 => 91,  84 => 15,  81 => 88,  77 => 87,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 54,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 38,  264 => 84,  258 => 34,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 21,  214 => 63,  177 => 122,  169 => 44,  140 => 55,  132 => 51,  128 => 17,  111 => 37,  107 => 62,  61 => 13,  273 => 96,  269 => 94,  254 => 33,  246 => 90,  243 => 88,  240 => 28,  238 => 85,  235 => 74,  230 => 82,  227 => 23,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 55,  179 => 48,  159 => 61,  143 => 109,  135 => 107,  131 => 106,  119 => 27,  108 => 36,  102 => 21,  71 => 17,  67 => 10,  63 => 15,  59 => 14,  47 => 9,  28 => 3,  94 => 53,  89 => 20,  85 => 46,  79 => 13,  75 => 12,  68 => 14,  56 => 63,  50 => 11,  87 => 90,  72 => 18,  55 => 69,  41 => 7,  38 => 6,  98 => 55,  93 => 28,  88 => 16,  78 => 21,  44 => 8,  27 => 4,  43 => 8,  40 => 7,  24 => 2,  31 => 5,  46 => 8,  26 => 6,  35 => 5,  29 => 3,  21 => 2,  25 => 3,  22 => 2,  201 => 92,  196 => 13,  183 => 49,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 43,  151 => 38,  142 => 59,  138 => 24,  136 => 56,  123 => 28,  121 => 46,  117 => 5,  115 => 43,  105 => 98,  101 => 32,  91 => 27,  69 => 25,  66 => 15,  62 => 23,  49 => 60,  32 => 4,  19 => 1,  209 => 17,  203 => 78,  199 => 67,  193 => 73,  189 => 52,  187 => 38,  182 => 66,  176 => 64,  173 => 65,  168 => 35,  164 => 59,  162 => 33,  154 => 33,  149 => 51,  147 => 37,  144 => 49,  141 => 34,  133 => 32,  130 => 41,  125 => 44,  122 => 43,  116 => 26,  112 => 42,  109 => 66,  106 => 22,  103 => 32,  99 => 20,  95 => 28,  92 => 17,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 9,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 10,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
