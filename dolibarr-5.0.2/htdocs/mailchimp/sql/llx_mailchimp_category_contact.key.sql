-- <MailChimp connector>
-- Copyright (C) 2013 Florian Henry florian.henry@open-concept.pro
-- Copyright (C) 2016 Pierre-Henry Favre phf@atm-consulting.fr
--
-- This program is free software; you can redistribute it and/or modify
-- it under the terms of the GNU General Public License as published by
-- the Free Software Foundation; either version 3 of the License, or
-- (at your option) any later version.
--
-- This program is distributed in the hope that it will be useful,
-- but WITHOUT ANY WARRANTY; without even the implied warranty of
-- MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
-- GNU General Public License for more details.
--
-- You should have received a copy of the GNU General Public License
-- along with this program. If not, see <http://www.gnu.org/licenses/>.

ALTER TABLE llx_mailchimp_category_contact ADD INDEX uk_mailchimp_category_contact_fk_category (fk_category);
