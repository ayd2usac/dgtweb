using System;
using ApiJWT.Models;
using ApiJWT.Services;
using Microsoft.AspNetCore.Mvc;

namespace ApiJWT.Controllers
{
    [Route("api/[controller]")]
    public class AuthController : Controller
    {
        private readonly IAuthService _authService;

        public AuthController(IAuthService authService)
        {
            _authService = authService;
        }

        [HttpPost("Token")]
        public IActionResult Token([FromBody] UserData data)
        {
            if (_authService.ValidateLogin(data.UserName, data.Password))
            {
                var date = DateTime.UtcNow;
                var LifeTime = TimeSpan.FromDays(30);
                
                var token = _authService.GenerateToken(date, data.UserName, LifeTime);
                var expirationDate = date.Add(LifeTime);

                return Ok(new
                {
                    Token = token,
                    ExpireAt = expirationDate
                });
            }

            else
            {
                return StatusCode(401);
            }
        }
    }
}
