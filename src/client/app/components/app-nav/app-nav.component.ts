import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-nav',
  templateUrl: './app-nav.component.html',
  styleUrls: ['./app-nav.component.sass']
})
export class AppNavComponent implements OnInit {

  public pages = [
    { name: 'Home', route: '/' },
    { name: 'About', route: '/about' },
    { name: 'Blog', route: '/blog' },
    { name: 'Projects', route: '/projects' },
    { name: 'Contact', route: '/contact' },
  ];

  constructor() { }

  ngOnInit() {
  }

}
