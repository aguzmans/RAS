<?php

/* OsdRetireBundle:Retire:about.html.twig */
class __TwigTemplate_07c2930e33cadce58e0eccdec161d581d52e50802f6b46651e5a8c3318c6b2cd extends Twig_Template
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

    // line 2
    public function block_maincontenttitle($context, array $blocks = array())
    {
        // line 3
        echo "        <h1>About</h1>
    ";
    }

    // line 5
    public function block_maincontentdata($context, array $blocks = array())
    {
        // line 6
        echo "        <p>Author: Abel Guzman Sanchez</p>
        <p>Author's Web: <a href=\"http://www.abelworld.com\">http://www.abelworld.com</a></p>
        <p>Lisence: <a href=\"http://opensource.org/licenses/MIT\">MIT</a></p>
        <p>Thanks to every one who contributed to this software:</p>
        <p>Mr. Morapedi</p>
        <p>Mr. Ovuya</p>
        <p>The terminal benefits department</p>
        <p>The IT Department staff</p>
    ";
    }

    public function getTemplateName()
    {
        return "OsdRetireBundle:Retire:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  211 => 62,  207 => 56,  197 => 51,  178 => 36,  175 => 35,  170 => 41,  165 => 34,  146 => 28,  83 => 24,  76 => 20,  70 => 17,  334 => 64,  325 => 59,  318 => 55,  310 => 53,  304 => 50,  300 => 49,  296 => 48,  290 => 45,  286 => 44,  282 => 43,  276 => 40,  272 => 39,  262 => 35,  248 => 30,  244 => 29,  237 => 27,  231 => 24,  223 => 22,  218 => 20,  213 => 18,  205 => 16,  200 => 52,  191 => 39,  188 => 11,  185 => 10,  174 => 121,  167 => 116,  161 => 115,  155 => 112,  139 => 108,  127 => 105,  114 => 101,  100 => 57,  96 => 94,  90 => 91,  84 => 89,  81 => 88,  77 => 87,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 54,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 38,  264 => 84,  258 => 34,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 21,  214 => 63,  177 => 122,  169 => 60,  140 => 55,  132 => 51,  128 => 17,  111 => 37,  107 => 62,  61 => 13,  273 => 96,  269 => 94,  254 => 33,  246 => 90,  243 => 88,  240 => 28,  238 => 85,  235 => 74,  230 => 82,  227 => 23,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 55,  179 => 69,  159 => 61,  143 => 109,  135 => 107,  131 => 106,  119 => 103,  108 => 36,  102 => 32,  71 => 17,  67 => 15,  63 => 15,  59 => 14,  47 => 9,  28 => 3,  94 => 53,  89 => 20,  85 => 46,  79 => 18,  75 => 17,  68 => 14,  56 => 9,  50 => 11,  87 => 90,  72 => 18,  55 => 69,  41 => 7,  38 => 6,  98 => 55,  93 => 28,  88 => 6,  78 => 21,  44 => 8,  27 => 4,  43 => 6,  40 => 6,  24 => 2,  31 => 5,  46 => 8,  26 => 6,  35 => 5,  29 => 2,  21 => 2,  25 => 3,  22 => 2,  201 => 92,  196 => 13,  183 => 37,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 43,  151 => 111,  142 => 59,  138 => 24,  136 => 56,  123 => 6,  121 => 46,  117 => 5,  115 => 43,  105 => 98,  101 => 32,  91 => 27,  69 => 25,  66 => 15,  62 => 23,  49 => 19,  32 => 3,  19 => 1,  209 => 17,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 38,  182 => 66,  176 => 64,  173 => 65,  168 => 35,  164 => 59,  162 => 33,  154 => 33,  149 => 51,  147 => 110,  144 => 49,  141 => 48,  133 => 20,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 66,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 51,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 13,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 10,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
