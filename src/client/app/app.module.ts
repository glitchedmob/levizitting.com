import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { RouterModule } from '@angular/router';
import { HttpClientModule } from '@angular/common/http';

import { AppComponent } from './app.component';
import { routes } from './app.routing';
import { AboutComponent } from './pages/about/about.component';
import { ContactComponent } from './pages/contact/contact.component';
import { MaterialModule } from './material/material.module';
import { AppNavComponent } from './components/app-nav/app-nav.component';
import { LogoComponent } from './components/logo/logo.component';


@NgModule({
  declarations: [
    AppComponent,
    AboutComponent,
    ContactComponent,
    AppNavComponent,
    LogoComponent,
  ],
  imports: [
    BrowserModule.withServerTransition({ appId: 'nestJS' }),
    HttpClientModule,
    RouterModule.forRoot(routes),
    MaterialModule
  ],
  providers: [],
  entryComponents: [
    AppNavComponent,
    LogoComponent
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
