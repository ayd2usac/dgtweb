using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;

namespace ApiJWT.Controllers
{
    [Produces("application/json")]
    [Route("api/Home")]

    public class HomeController : Controller
    {
        public ActionResult Index()
        {
            ViewBag.Message = "Inicio de la App";
            return View();
        }

        
       
    }
}