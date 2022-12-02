using Microsoft.AspNetCore.Mvc;
using P1_ASP.Models;
using P1_ASP.Services;
using System.Diagnostics;
using P1_ASP.Controllers;

namespace P1_ASP.Controllers
{
    public class HomeController : Controller
    {
        private readonly ILogger<HomeController> _logger;

        public HomeController(ILogger<HomeController> logger)
        {
            _logger = logger;
        }

        public IActionResult Index()
        {
            ViewBag.Vname = "Autor: Antonio Zamacona";
            ViewBag.V2 = "Voy a ser un buen programador de ASPx.NET";
            return View();
        }

        public IActionResult Privacy()
        {
            
            return View();
        }
        public IActionResult Experience() {
            return View();
        }
        public IActionResult Proyectos()
        {
            ViewBag.Vproyecto = new RepositoryOfProjects().GetProjects();
            return View();
        }
        public IActionResult AcademicExperience() {
            return View();
        }
        public IActionResult TechnicalKnowledge() {
            return View();
        }
        public IActionResult CurriculumVitae() {
            return View();
        }
       [ResponseCache(Duration = 0, Location = ResponseCacheLocation.None, NoStore = true)]
        public IActionResult Error()
        {
            return View(new ErrorViewModel { RequestId = Activity.Current?.Id ?? HttpContext.TraceIdentifier });
        }
    }
}