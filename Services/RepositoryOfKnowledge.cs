using P1_ASP.Models;
using System.Net.NetworkInformation;

namespace P1_ASP.Services
{
    public class RepositoryOfKnowledge
    {
        public List<ClassKnowledge> GetKnowledge()
        {

            return new List<ClassKnowledge>()
            {
                new ClassKnowledge
                {
                    Title = "Python application development technician",
                    Description = "CEPI BASE",
                    ImageURL = "/img/Python-logo.svg"
                },
                new ClassKnowledge
                {
                    Title = "Linux Operating systems administration",
                    Description = "Linux Profesional Institute",
                    ImageURL = "/img/linux.jpg"
                },
                new ClassKnowledge
                {
                    Title = "Oracle 11g PL/SQL Programming",
                    Description = "Oracle Academy",
                    ImageURL = "/img/oracle.png"
                },
                new ClassKnowledge
                {
                    Title = "SQL Oracle 11g",
                    Description = "Oracle Academy",
                    ImageURL = "/img/oracle.png"
                },
                new ClassKnowledge
                {
                    Title = "Java SE Fundamentals",
                    Description = "Oracle Academy",
                    ImageURL = "/img/oracle.png"
                },
                new ClassKnowledge
                {
                    Title = "Windows 10 administration",
                    Description = "Microsoft Imagine Academy",
                    ImageURL = "/img/microsoft.png"
                },new ClassKnowledge
                {
                    Title = "Windows Server 2016 Network infrastructure administration",
                    Description = "Microsoft Imagine Academy",
                    ImageURL = "/img/microsoft.png"
                },
                new ClassKnowledge
                {
                    Title = "MTA: Introduction to Programming Using HTML and CSS - Certified 2022",
                    Description = "Microsoft",
                    ImageURL = "/img/htmLogo.webp"
                }
                
            };
        }
    }
}
