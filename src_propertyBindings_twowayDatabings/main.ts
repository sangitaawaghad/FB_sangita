import { platformBrowserDynamic } from '@angular/platform-browser-dynamic';
import { enableProdMode } from '@angular/core';
import { environment } from './environments/environment';
import { StudentModule } from './students/student.module';

if (environment.production) {
  enableProdMode();
}

platformBrowserDynamic().bootstrapModule(StudentModule);
