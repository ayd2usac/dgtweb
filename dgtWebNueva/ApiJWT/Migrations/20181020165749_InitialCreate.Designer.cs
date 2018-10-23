﻿// <auto-generated />
using ApiJWT;
using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Infrastructure;
using Microsoft.EntityFrameworkCore.Metadata;
using Microsoft.EntityFrameworkCore.Migrations;
using Microsoft.EntityFrameworkCore.Storage;
using Microsoft.EntityFrameworkCore.Storage.Internal;
using System;

namespace ApiJWT.Migrations
{
    [DbContext(typeof(APIDBContext))]
    [Migration("20181020165749_InitialCreate")]
    partial class InitialCreate
    {
        protected override void BuildTargetModel(ModelBuilder modelBuilder)
        {
#pragma warning disable 612, 618
            modelBuilder
                .HasAnnotation("ProductVersion", "2.0.3-rtm-10026")
                .HasAnnotation("SqlServer:ValueGenerationStrategy", SqlServerValueGenerationStrategy.IdentityColumn);

            modelBuilder.Entity("ApiJWT.Models.Users", b =>
                {
                    b.Property<int>("Id")
                        .ValueGeneratedOnAdd();

                    b.Property<string>("Email")
                        .IsRequired();

                    b.Property<string>("LastName")
                        .IsRequired();

                    b.Property<string>("Name")
                        .IsRequired();

                    b.Property<string>("Password")
                        .IsRequired();

                    b.HasKey("Id");

                    b.ToTable("Users");
                });

            modelBuilder.Entity("ApiJWT.Models.Complaints", b =>
                {
                    b.Property<int>("Id")
                        .ValueGeneratedOnAdd();

                    b.Property<DateTime?>("PostDate")
                       .IsRequired();


                    b.Property<string>("Description")
                        .IsRequired()
                        .HasMaxLength(500);

                    b.HasKey("Id");

                    b.HasIndex("PostDate");

                    b.ToTable("Complaints");
                });

            /*
            modelBuilder.Entity("ApiJWT.Models.Complaint_types", b =>
                {
                    b.Property<int>("Id")
                        .ValueGeneratedOnAdd();

                    b.Property<string>("Description")
                       .IsRequired()
                       .HasMaxLength(100);


                    b.HasKey("Id");

                    b.ToTable("Complaint_types");
                });

            modelBuilder.Entity("ApiJWT.Models.Location_types", b =>
                {
                    b.Property<int>("Id")
                        .ValueGeneratedOnAdd();

                    b.Property<string>("Description")
                       .IsRequired();

                    b.HasKey("Id");

                    b.ToTable("Location_types");
                });

            modelBuilder.Entity("ApiJWT.Models.Locations", b =>
            {
                b.Property<int>("Id")
                    .ValueGeneratedOnAdd();

                b.Property<string>("Name")
                   .IsRequired();

                b.HasKey("Id");

                b.ToTable("Location_types");
            });

            modelBuilder.Entity("ApiJWT.Models.Locations", b =>
                {
                    b.HasOne("ApiJWT.Models.Location_types", "Location_types")
                        .WithMany("Locations")
                        .HasForeignKey("Location_type_id")
                        .OnDelete(DeleteBehavior.Cascade);
                });

        */
            modelBuilder.Entity("ApiJWT.Models.Complaints", b =>
                {
                    /*
                    b.HasOne("ApiJWT.Models.Complaint_types", "Complaint_types")
                        .WithMany("Complaints")
                        .HasForeignKey("Complaint_types_id")
                        .OnDelete(DeleteBehavior.Cascade);
                    */

                    b.HasOne("ApiJWT.Models.Users", "Users")
                        .WithMany("Users")
                        .HasForeignKey("UserId")
                        .OnDelete(DeleteBehavior.Cascade);
                });
                
#pragma warning restore 612, 618
        }
    }
}
