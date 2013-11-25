<?php

/* OsdRetireBundle:Retire:general.html.twig */
class __TwigTemplate_40ec6c7ece1563770e7bb553b0e1ec4ce20c01c5192f541e63ae84c911654c08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'maincontenttitle' => array($this, 'block_maincontenttitle'),
            'maincontentdata' => array($this, 'block_maincontentdata'),
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
        echo "    <h1>Genaral indicators for worker in retirement database</h1>
";
    }

    // line 7
    public function block_maincontentdata($context, array $blocks = array())
    {
        // line 8
        echo "    <table>
        <tr>
            <th>Issue</th>
            <th>Result</th>
        </tr>
        <tr>
            <td>Total of workers in the database: </td>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["totalWorkers"]) ? $context["totalWorkers"] : null), "html", null, true);
        echo "</td>
        </tr>        
        <tr>
            <td>Workers with age to be retired: </td>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["moreThan60"]) ? $context["moreThan60"] : null), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>Workers that are currently retired: </td>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["totalRetired"]) ? $context["totalRetired"] : null), "html", null, true);
        echo "</td>
        </tr>         
        <tr>
            <td>Workers that are more than 59 and less than 60 years old: </td>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["lessThanOneYear"]) ? $context["lessThanOneYear"] : null), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>Workers that are more than 59 and 5 months and less than 60 years old: </td>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["lessThan7Months"]) ? $context["lessThan7Months"] : null), "html", null, true);
        echo "</td>            
        </tr>
        <tr>
            <td>Total of workers with less than 59 years old: </td>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["totalWithLessThan59Years"]) ? $context["totalWithLessThan59Years"] : null), "html", null, true);
        echo "</td>          
        </tr>
    </table>
";
    }

    public function getTemplateName()
    {
        return "OsdRetireBundle:Retire:general.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 62,  198 => 55,  194 => 54,  190 => 53,  202 => 58,  195 => 55,  137 => 33,  110 => 23,  97 => 19,  53 => 66,  37 => 7,  211 => 62,  207 => 56,  197 => 51,  178 => 36,  175 => 47,  170 => 41,  165 => 43,  146 => 28,  83 => 24,  76 => 20,  70 => 27,  334 => 64,  325 => 59,  318 => 55,  310 => 53,  304 => 50,  300 => 49,  296 => 48,  290 => 45,  286 => 44,  282 => 43,  276 => 40,  272 => 39,  262 => 35,  248 => 30,  244 => 29,  237 => 27,  231 => 24,  223 => 22,  218 => 20,  213 => 18,  205 => 59,  200 => 52,  191 => 39,  188 => 11,  185 => 10,  174 => 121,  167 => 116,  161 => 42,  155 => 39,  139 => 108,  127 => 29,  114 => 101,  100 => 57,  96 => 94,  90 => 91,  84 => 35,  81 => 88,  77 => 31,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 54,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 38,  264 => 84,  258 => 34,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 21,  214 => 63,  177 => 122,  169 => 44,  140 => 55,  132 => 51,  128 => 17,  111 => 37,  107 => 62,  61 => 13,  273 => 96,  269 => 94,  254 => 33,  246 => 90,  243 => 88,  240 => 28,  238 => 85,  235 => 74,  230 => 82,  227 => 23,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 55,  179 => 48,  159 => 61,  143 => 109,  135 => 107,  131 => 106,  119 => 27,  108 => 36,  102 => 21,  71 => 17,  67 => 10,  63 => 23,  59 => 14,  47 => 9,  28 => 3,  94 => 53,  89 => 20,  85 => 46,  79 => 13,  75 => 12,  68 => 14,  56 => 19,  50 => 11,  87 => 90,  72 => 18,  55 => 69,  41 => 7,  38 => 6,  98 => 55,  93 => 28,  88 => 16,  78 => 21,  44 => 8,  27 => 4,  43 => 8,  40 => 8,  24 => 2,  31 => 5,  46 => 8,  26 => 6,  35 => 5,  29 => 3,  21 => 2,  25 => 3,  22 => 2,  201 => 92,  196 => 13,  183 => 49,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 43,  151 => 38,  142 => 59,  138 => 24,  136 => 56,  123 => 28,  121 => 46,  117 => 5,  115 => 43,  105 => 98,  101 => 32,  91 => 27,  69 => 25,  66 => 15,  62 => 23,  49 => 15,  32 => 4,  19 => 1,  209 => 17,  203 => 78,  199 => 67,  193 => 73,  189 => 52,  187 => 38,  182 => 66,  176 => 64,  173 => 65,  168 => 35,  164 => 59,  162 => 33,  154 => 33,  149 => 51,  147 => 37,  144 => 49,  141 => 34,  133 => 32,  130 => 41,  125 => 44,  122 => 43,  116 => 26,  112 => 42,  109 => 66,  106 => 22,  103 => 32,  99 => 20,  95 => 28,  92 => 17,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 9,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 10,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
