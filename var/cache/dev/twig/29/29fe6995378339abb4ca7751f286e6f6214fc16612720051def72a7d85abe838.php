<?php

/* contrebandier/show.html.twig */
class __TwigTemplate_eb08f98085fe0001ffc13542f59812940ac1bc10c8321bd15402a26fc97a9c29 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contrebandier/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contrebandier/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contrebandier/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contrebandier";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Contrebandier</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrebandier"]) || array_key_exists("contrebandier", $context) ? $context["contrebandier"] : (function () { throw new Twig_Error_Runtime('Variable "contrebandier" does not exist.', 12, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrebandier"]) || array_key_exists("contrebandier", $context) ? $context["contrebandier"] : (function () { throw new Twig_Error_Runtime('Variable "contrebandier" does not exist.', 16, $this->source); })()), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrebandier"]) || array_key_exists("contrebandier", $context) ? $context["contrebandier"] : (function () { throw new Twig_Error_Runtime('Variable "contrebandier" does not exist.', 20, $this->source); })()), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nationnalite</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrebandier"]) || array_key_exists("contrebandier", $context) ? $context["contrebandier"] : (function () { throw new Twig_Error_Runtime('Variable "contrebandier" does not exist.', 24, $this->source); })()), "nationnalite", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrebandier"]) || array_key_exists("contrebandier", $context) ? $context["contrebandier"] : (function () { throw new Twig_Error_Runtime('Variable "contrebandier" does not exist.', 28, $this->source); })()), "age", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sexe</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrebandier"]) || array_key_exists("contrebandier", $context) ? $context["contrebandier"] : (function () { throw new Twig_Error_Runtime('Variable "contrebandier" does not exist.', 32, $this->source); })()), "sexe", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Metier</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrebandier"]) || array_key_exists("contrebandier", $context) ? $context["contrebandier"] : (function () { throw new Twig_Error_Runtime('Variable "contrebandier" does not exist.', 36, $this->source); })()), "metier", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Domicile</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrebandier"]) || array_key_exists("contrebandier", $context) ? $context["contrebandier"] : (function () { throw new Twig_Error_Runtime('Variable "contrebandier" does not exist.', 40, $this->source); })()), "domicile", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Complice</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrebandier"]) || array_key_exists("contrebandier", $context) ? $context["contrebandier"] : (function () { throw new Twig_Error_Runtime('Variable "contrebandier" does not exist.', 44, $this->source); })()), "complice", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nb</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrebandier"]) || array_key_exists("contrebandier", $context) ? $context["contrebandier"] : (function () { throw new Twig_Error_Runtime('Variable "contrebandier" does not exist.', 48, $this->source); })()), "nb", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrebandier_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrebandier_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["contrebandier"]) || array_key_exists("contrebandier", $context) ? $context["contrebandier"] : (function () { throw new Twig_Error_Runtime('Variable "contrebandier" does not exist.', 55, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">edit</a>

    ";
        // line 57
        echo twig_include($this->env, $context, "contrebandier/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contrebandier/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 57,  156 => 55,  151 => 53,  143 => 48,  136 => 44,  129 => 40,  122 => 36,  115 => 32,  108 => 28,  101 => 24,  94 => 20,  87 => 16,  80 => 12,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Contrebandier{% endblock %}

{% block body %}
    <h1>Contrebandier</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ contrebandier.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ contrebandier.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ contrebandier.prenom }}</td>
            </tr>
            <tr>
                <th>Nationnalite</th>
                <td>{{ contrebandier.nationnalite }}</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>{{ contrebandier.age }}</td>
            </tr>
            <tr>
                <th>Sexe</th>
                <td>{{ contrebandier.sexe }}</td>
            </tr>
            <tr>
                <th>Metier</th>
                <td>{{ contrebandier.metier }}</td>
            </tr>
            <tr>
                <th>Domicile</th>
                <td>{{ contrebandier.domicile }}</td>
            </tr>
            <tr>
                <th>Complice</th>
                <td>{{ contrebandier.complice }}</td>
            </tr>
            <tr>
                <th>Nb</th>
                <td>{{ contrebandier.nb }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('contrebandier_index') }}\">back to list</a>

    <a href=\"{{ path('contrebandier_edit', {'id': contrebandier.id}) }}\">edit</a>

    {{ include('contrebandier/_delete_form.html.twig') }}
{% endblock %}
", "contrebandier/show.html.twig", "C:\\MAMP\\htdocs\\projetPerso\\templates\\contrebandier\\show.html.twig");
    }
}
