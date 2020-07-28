<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Storefront/storefront/component/listing/filter/filter-rating.html.twig */
class __TwigTemplate_a5eebfd81043635c0dd2d9c28c07e9bacd5e86c280dc7428ed7f5a3030c59c8f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_filter_rating' => [$this, 'block_component_filter_rating'],
            'component_filter_rating_toggle' => [$this, 'block_component_filter_rating_toggle'],
            'component_filter_rating_display_name' => [$this, 'block_component_filter_rating_display_name'],
            'component_filter_rating_count' => [$this, 'block_component_filter_rating_count'],
            'component_filter_rating_toggle_icon' => [$this, 'block_component_filter_rating_toggle_icon'],
            'component_filter_rating_dropdown' => [$this, 'block_component_filter_rating_dropdown'],
            'component_filter_rating_container' => [$this, 'block_component_filter_rating_container'],
            'component_filter_rating_point_label' => [$this, 'block_component_filter_rating_point_label'],
            'component_filter_rating_point_radio' => [$this, 'block_component_filter_rating_point_radio'],
            'component_filter_rating_point_radio_element' => [$this, 'block_component_filter_rating_point_radio_element'],
            'component_filter_rating_text_placeholder' => [$this, 'block_component_filter_rating_text_placeholder'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/listing/filter/filter-rating.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/listing/filter/filter-rating.html.twig"));

        // line 1
        $context["filterItemId"] = ((("filter-" . ($context["name"] ?? null)) . "-") . twig_random($this->env));
        // line 2
        echo "
";
        // line 3
        if ( !(isset($context["maxPoints"]) || array_key_exists("maxPoints", $context))) {
            // line 4
            echo "    ";
            $context["maxPoints"] = 5;
        }
        // line 6
        echo "
";
        // line 7
        if ( !(isset($context["filterRatingActiveLabelStart"]) || array_key_exists("filterRatingActiveLabelStart", $context))) {
            // line 8
            echo "    ";
            $context["filterRatingActiveLabelStart"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRatingActiveLabelStart"));
        }
        // line 10
        echo "
";
        // line 11
        if ( !(isset($context["filterRatingActiveLabelEnd"]) || array_key_exists("filterRatingActiveLabelEnd", $context))) {
            // line 12
            echo "    ";
            $context["filterRatingActiveLabelEnd"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRatingActiveLabelEnd"));
        }
        // line 14
        echo "
";
        // line 15
        $context["filterRatingOptions"] = ["name" =>         // line 16
($context["name"] ?? null), "maxPoints" =>         // line 17
($context["maxPoints"] ?? null), "snippets" => ["filterRatingActiveLabelStart" =>         // line 19
($context["filterRatingActiveLabelStart"] ?? null), "filterRatingActiveLabelEnd" =>         // line 20
($context["filterRatingActiveLabelEnd"] ?? null)]];
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('component_filter_rating', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_filter_rating($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating"));

        // line 25
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 25), "core", [], "any", false, false, false, 25), "listing", [], "any", false, false, false, 25), "showReview", [], "any", false, false, false, 25)) {
            // line 26
            echo "        <div class=\"filter-rating filter-panel-item";
            if ( !($context["sidebar"] ?? null)) {
                echo " dropdown";
            }
            echo "\"
             data-filter-rating=\"true\"
             data-filter-rating-options='";
            // line 28
            echo twig_escape_filter($this->env, json_encode(($context["filterRatingOptions"] ?? null)), "html", null, true);
            echo "'>

            ";
            // line 30
            $this->displayBlock('component_filter_rating_toggle', $context, $blocks);
            // line 55
            echo "
            ";
            // line 56
            $this->displayBlock('component_filter_rating_dropdown', $context, $blocks);
            // line 91
            echo "        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_component_filter_rating_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_toggle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_toggle"));

        // line 31
        echo "                <button class=\"filter-panel-item-toggle btn";
        if (($context["sidebar"] ?? null)) {
            echo " btn-block";
        }
        echo "\"
                        aria-expanded=\"false\"
                        ";
        // line 33
        if (($context["sidebar"] ?? null)) {
            // line 34
            echo "                        data-toggle=\"collapse\"
                        data-target=\"#";
            // line 35
            echo twig_escape_filter($this->env, ($context["filterItemId"] ?? null), "html", null, true);
            echo "\"
                        ";
        } else {
            // line 37
            echo "                        data-toggle=\"dropdown\"
                        data-offset=\"0,8\"
                        aria-haspopup=\"true\"
                        ";
        }
        // line 40
        echo ">

                    ";
        // line 42
        $this->displayBlock('component_filter_rating_display_name', $context, $blocks);
        // line 45
        echo "
                    ";
        // line 46
        $this->displayBlock('component_filter_rating_count', $context, $blocks);
        // line 49
        echo "
                    ";
        // line 50
        $this->displayBlock('component_filter_rating_toggle_icon', $context, $blocks);
        // line 53
        echo "                </button>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_component_filter_rating_display_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_display_name"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_display_name"));

        // line 43
        echo "                        ";
        echo twig_escape_filter($this->env, ($context["displayName"] ?? null), "html", null, true);
        echo "
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_component_filter_rating_count($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_count"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_count"));

        // line 47
        echo "                        <span class=\"filter-rating-count\"></span>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_component_filter_rating_toggle_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_toggle_icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_toggle_icon"));

        // line 51
        echo "                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/listing/filter/filter-rating.html.twig", 51);
        })())->display(twig_array_merge($context, ["pack" => "solid", "size" => "xs", "class" => "filter-panel-item-toggle", "name" => "arrow-medium-down"]));
        // line 52
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_component_filter_rating_dropdown($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_dropdown"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_dropdown"));

        // line 57
        echo "                <div class=\"filter-rating-dropdown filter-panel-item-dropdown";
        if (($context["sidebar"] ?? null)) {
            echo " collapse";
        } else {
            echo " dropdown-menu";
        }
        echo "\"
                     id=\"";
        // line 58
        echo twig_escape_filter($this->env, ($context["filterItemId"] ?? null), "html", null, true);
        echo "\">

                    ";
        // line 60
        $this->displayBlock('component_filter_rating_container', $context, $blocks);
        // line 89
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_component_filter_rating_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_container"));

        // line 61
        echo "                        <div class=\"filter-rating-container\" data-rating-system=\"true\">
                            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["maxPoints"] ?? null)));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["point"]) {
            // line 63
            echo "
                                ";
            // line 64
            $this->displayBlock('component_filter_rating_point_label', $context, $blocks);
            // line 82
            echo "                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['point'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "
                            ";
        // line 84
        $this->displayBlock('component_filter_rating_text_placeholder', $context, $blocks);
        // line 87
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_component_filter_rating_point_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_point_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_point_label"));

        // line 65
        echo "                                    <label data-review-form-point=\"";
        echo twig_escape_filter($this->env, ($context["point"] ?? null), "html", null, true);
        echo "\"
                                           class=\"filter-rating-star ";
        // line 66
        if ((($context["currentPoints"] ?? null) >= ($context["point"] ?? null))) {
            echo " is-active";
        }
        echo "\">

                                        ";
        // line 68
        $this->displayBlock('component_filter_rating_point_radio', $context, $blocks);
        // line 74
        echo "
                                        ";
        // line 75
        $this->displayBlock('component_filter_rating_point_radio_element', $context, $blocks);
        // line 80
        echo "                                    </label>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_component_filter_rating_point_radio($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_point_radio"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_point_radio"));

        // line 69
        echo "                                            <input class=\"product-detail-review-form-radio\"
                                                   type=\"radio\"
                                                   name=\"points\"
                                                   value=\"";
        // line 72
        echo twig_escape_filter($this->env, ($context["point"] ?? null), "html", null, true);
        echo "\">
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_component_filter_rating_point_radio_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_point_radio_element"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_point_radio_element"));

        // line 76
        echo "                                            ";
        $this->loadTemplate("@Storefront/storefront/component/review/point.html.twig", "@Storefront/storefront/component/listing/filter/filter-rating.html.twig", 76)->display(twig_array_merge($context, ["type" => "blank"]));
        // line 79
        echo "                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_component_filter_rating_text_placeholder($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_text_placeholder"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_rating_text_placeholder"));

        // line 85
        echo "                                <div data-rating-text=\"true\"></div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/listing/filter/filter-rating.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  485 => 85,  475 => 84,  465 => 79,  462 => 76,  452 => 75,  440 => 72,  435 => 69,  425 => 68,  414 => 80,  412 => 75,  409 => 74,  407 => 68,  400 => 66,  395 => 65,  385 => 64,  374 => 87,  372 => 84,  369 => 83,  355 => 82,  353 => 64,  350 => 63,  333 => 62,  330 => 61,  320 => 60,  309 => 89,  307 => 60,  302 => 58,  293 => 57,  283 => 56,  273 => 52,  264 => 51,  254 => 50,  243 => 47,  233 => 46,  220 => 43,  210 => 42,  199 => 53,  197 => 50,  194 => 49,  192 => 46,  189 => 45,  187 => 42,  183 => 40,  177 => 37,  172 => 35,  169 => 34,  167 => 33,  159 => 31,  149 => 30,  137 => 91,  135 => 56,  132 => 55,  130 => 30,  125 => 28,  117 => 26,  114 => 25,  95 => 24,  92 => 23,  90 => 20,  89 => 19,  88 => 17,  87 => 16,  86 => 15,  83 => 14,  79 => 12,  77 => 11,  74 => 10,  70 => 8,  68 => 7,  65 => 6,  61 => 4,  59 => 3,  56 => 2,  54 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set filterItemId = 'filter-' ~ name ~ '-' ~ random() %}

{% if maxPoints is not defined %}
    {% set maxPoints = 5 %}
{% endif %}

{% if filterRatingActiveLabelStart is not defined %}
    {% set filterRatingActiveLabelStart = 'listing.filterRatingActiveLabelStart'|trans|sw_sanitize %}
{% endif %}

{% if filterRatingActiveLabelEnd is not defined %}
    {% set filterRatingActiveLabelEnd = 'listing.filterRatingActiveLabelEnd'|trans|sw_sanitize %}
{% endif %}

{% set filterRatingOptions = {
    name: name,
    maxPoints: maxPoints,
    snippets: {
        filterRatingActiveLabelStart: filterRatingActiveLabelStart,
        filterRatingActiveLabelEnd: filterRatingActiveLabelEnd,
    }
} %}

{% block component_filter_rating %}
    {% if shopware.config.core.listing.showReview %}
        <div class=\"filter-rating filter-panel-item{% if not sidebar %} dropdown{% endif %}\"
             data-filter-rating=\"true\"
             data-filter-rating-options='{{ filterRatingOptions|json_encode }}'>

            {% block component_filter_rating_toggle %}
                <button class=\"filter-panel-item-toggle btn{% if sidebar %} btn-block{% endif %}\"
                        aria-expanded=\"false\"
                        {% if sidebar %}
                        data-toggle=\"collapse\"
                        data-target=\"#{{ filterItemId }}\"
                        {% else %}
                        data-toggle=\"dropdown\"
                        data-offset=\"0,8\"
                        aria-haspopup=\"true\"
                        {% endif %}>

                    {% block component_filter_rating_display_name %}
                        {{ displayName }}
                    {% endblock %}

                    {% block component_filter_rating_count %}
                        <span class=\"filter-rating-count\"></span>
                    {% endblock %}

                    {% block component_filter_rating_toggle_icon %}
                        {% sw_icon 'arrow-medium-down' style {'pack': 'solid', 'size': 'xs', 'class': 'filter-panel-item-toggle'} %}
                    {% endblock %}
                </button>
            {% endblock %}

            {% block component_filter_rating_dropdown %}
                <div class=\"filter-rating-dropdown filter-panel-item-dropdown{% if sidebar %} collapse{% else %} dropdown-menu{% endif %}\"
                     id=\"{{ filterItemId }}\">

                    {% block component_filter_rating_container %}
                        <div class=\"filter-rating-container\" data-rating-system=\"true\">
                            {% for point in 1..maxPoints %}

                                {% block component_filter_rating_point_label %}
                                    <label data-review-form-point=\"{{ point }}\"
                                           class=\"filter-rating-star {% if currentPoints >= point %} is-active{% endif %}\">

                                        {% block component_filter_rating_point_radio %}
                                            <input class=\"product-detail-review-form-radio\"
                                                   type=\"radio\"
                                                   name=\"points\"
                                                   value=\"{{ point }}\">
                                        {% endblock %}

                                        {% block component_filter_rating_point_radio_element %}
                                            {% sw_include '@Storefront/storefront/component/review/point.html.twig' with {
                                                type: 'blank'
                                            } %}
                                        {% endblock %}
                                    </label>
                                {% endblock %}
                            {% endfor %}

                            {% block component_filter_rating_text_placeholder %}
                                <div data-rating-text=\"true\"></div>
                            {% endblock %}
                        </div>
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endif %}
{% endblock %}
", "@Storefront/storefront/component/listing/filter/filter-rating.html.twig", "/var/www/html/sw6/vendor/shopware/platform/src/Storefront/Resources/views/storefront/component/listing/filter/filter-rating.html.twig");
    }
}
