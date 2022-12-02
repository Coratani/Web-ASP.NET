using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;

namespace P1_ASP.Models
{
    public class ClassJobs : Controller
    {
        // GET: ClassJobs
        public ActionResult Index()
        {
            return View();
        }

        // GET: ClassJobs/Details/5
        public ActionResult Details(int id)
        {
            return View();
        }

        // GET: ClassJobs/Create
        public ActionResult Create()
        {
            return View();
        }

        // POST: ClassJobs/Create
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create(IFormCollection collection)
        {
            try
            {
                return RedirectToAction(nameof(Index));
            }
            catch
            {
                return View();
            }
        }

        // GET: ClassJobs/Edit/5
        public ActionResult Edit(int id)
        {
            return View();
        }

        // POST: ClassJobs/Edit/5
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit(int id, IFormCollection collection)
        {
            try
            {
                return RedirectToAction(nameof(Index));
            }
            catch
            {
                return View();
            }
        }

        // GET: ClassJobs/Delete/5
        public ActionResult Delete(int id)
        {
            return View();
        }

        // POST: ClassJobs/Delete/5
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Delete(int id, IFormCollection collection)
        {
            try
            {
                return RedirectToAction(nameof(Index));
            }
            catch
            {
                return View();
            }
        }
    }
}
